<?php

namespace Jeely\Server;

use Closure;
use Jeely\Log\LoggerInterface;
use Jeely\Log\NullLogger;
use Revolt\EventLoop;
use Throwable;

/**
 * Tiny HTTP server for Telegram webhooks when Apache/Nginx is unavailable.
 *
 * Listens with PHP sockets and Revolt — no external web server required.
 */
final class HttpServer
{
    private $socket = null;

    private bool $running = false;

    private ?string $acceptWatcher = null;

    private LoggerInterface $logger;

    /** @var callable(string $method, string $path, string $body, array $headers):array{status?:int,body?:string,headers?:array<string,string>}|string|null */
    private $handler = null;

    public function __construct(
        private string $host = '0.0.0.0',
        private int $port = 8080,
        ?LoggerInterface $logger = null,
    ) {
        $this->logger = $logger ?? new NullLogger();
    }

    public function onRequest(callable $handler): self
    {
        $this->handler = $handler;

        return $this;
    }

    public function host(): string
    {
        return $this->host;
    }

    public function port(): int
    {
        return $this->port;
    }

    /**
     * Start accepting connections on the Revolt event loop (non-blocking).
     */
    public function start(): void
    {
        if ($this->running) {
            return;
        }

        $address = sprintf('tcp://%s:%d', $this->host, $this->port);
        $socket = @stream_socket_server($address, $errno, $errstr, STREAM_SERVER_BIND | STREAM_SERVER_LISTEN);

        if ($socket === false) {
            throw new \RuntimeException(sprintf('Unable to bind HTTP server on %s (%d: %s)', $address, $errno, $errstr));
        }

        stream_set_blocking($socket, false);
        $this->socket = $socket;
        $this->running = true;

        $this->acceptWatcher = EventLoop::onReadable($socket, function () {
            $this->accept();
        });

        $this->logger->info('HTTP server listening on {address}', ['address' => $address]);
    }

    /**
     * Run the event loop until {@see stop()} is called.
     */
    public function run(): void
    {
        $this->start();
        EventLoop::run();
    }

    public function stop(): void
    {
        $this->running = false;

        if ($this->acceptWatcher !== null) {
            EventLoop::cancel($this->acceptWatcher);
            $this->acceptWatcher = null;
        }

        if (is_resource($this->socket)) {
            fclose($this->socket);
            $this->socket = null;
        }

        EventLoop::getDriver()->stop();
        $this->logger->info('HTTP server stopped');
    }

    private function accept(): void
    {
        if (! is_resource($this->socket)) {
            return;
        }

        $client = @stream_socket_accept($this->socket, 0);
        if ($client === false) {
            return;
        }

        stream_set_blocking($client, false);

        $buffer = '';
        $watcher = null;
        $watcher = EventLoop::onReadable($client, function () use (&$buffer, &$watcher, $client) {
            $chunk = fread($client, 8192);
            if ($chunk === false || $chunk === '') {
                if (feof($client)) {
                    EventLoop::cancel($watcher);
                    fclose($client);
                }

                return;
            }

            $buffer .= $chunk;

            if (! str_contains($buffer, "\r\n\r\n")) {
                return;
            }

            [$rawHeaders, $body] = explode("\r\n\r\n", $buffer, 2) + [1 => ''];
            $headerLines = explode("\r\n", $rawHeaders);
            $requestLine = array_shift($headerLines) ?? '';
            $parts = explode(' ', $requestLine);
            $method = strtoupper($parts[0] ?? 'GET');
            $target = $parts[1] ?? '/';
            $path = parse_url($target, PHP_URL_PATH) ?: '/';

            $headers = [];
            $contentLength = 0;
            foreach ($headerLines as $line) {
                if (! str_contains($line, ':')) {
                    continue;
                }
                [$name, $value] = explode(':', $line, 2);
                $name = strtolower(trim($name));
                $value = trim($value);
                $headers[$name] = $value;
                if ($name === 'content-length') {
                    $contentLength = (int) $value;
                }
            }

            if (strlen($body) < $contentLength) {
                return;
            }

            EventLoop::cancel($watcher);

            try {
                $response = $this->dispatch($method, $path, substr($body, 0, $contentLength) ?: $body, $headers);
            } catch (Throwable $e) {
                $this->logger->error('HTTP handler failed: {message}', ['message' => $e->getMessage()]);
                $response = ['status' => 500, 'body' => 'Internal Server Error'];
            }

            $this->writeResponse($client, $response);
            fclose($client);
        });
    }

    /**
     * @param array<string,string> $headers
     * @return array{status:int,body:string,headers:array<string,string>}
     */
    private function dispatch(string $method, string $path, string $body, array $headers): array
    {
        $this->logger->debug('{method} {path}', [
            'method' => $method,
            'path' => $path,
            'bytes' => strlen($body),
        ]);

        if ($this->handler === null) {
            return ['status' => 404, 'body' => 'Not Found', 'headers' => []];
        }

        $result = ($this->handler)($method, $path, $body, $headers);

        if (is_string($result)) {
            return ['status' => 200, 'body' => $result, 'headers' => ['Content-Type' => 'text/plain; charset=utf-8']];
        }

        if (! is_array($result)) {
            return ['status' => 204, 'body' => '', 'headers' => []];
        }

        return [
            'status' => (int) ($result['status'] ?? 200),
            'body' => (string) ($result['body'] ?? 'ok'),
            'headers' => (array) ($result['headers'] ?? ['Content-Type' => 'text/plain; charset=utf-8']),
        ];
    }

    /**
     * @param array{status?:int,body?:string,headers?:array<string,string>} $response
     */
    private function writeResponse($client, array $response): void
    {
        $status = (int) ($response['status'] ?? 200);
        $body = (string) ($response['body'] ?? '');
        $headers = (array) ($response['headers'] ?? []);
        $headers['Content-Length'] = (string) strlen($body);
        $headers += ['Content-Type' => 'text/plain; charset=utf-8', 'Connection' => 'close'];

        $reason = match ($status) {
            200 => 'OK',
            204 => 'No Content',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
            default => 'OK',
        };

        $out = "HTTP/1.1 {$status} {$reason}\r\n";
        foreach ($headers as $name => $value) {
            $out .= $name . ': ' . $value . "\r\n";
        }
        $out .= "\r\n" . $body;

        fwrite($client, $out);
    }
}
