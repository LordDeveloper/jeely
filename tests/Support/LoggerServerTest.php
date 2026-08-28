<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Log\Logger;
use Jeely\Server\HttpServer;
use Revolt\EventLoop;

return [
    'logger_writes_interpolated_info' => function (): void {
        $buffer = '';
        $logger = new Logger('test', Logger::DEBUG);
        $logger->addWriter(function (string $level, string $line) use (&$buffer) {
            $buffer .= $line;
        });

        $logger->info('hello {name}', ['name' => 'jeely', 'extra' => 1]);

        assertTrue(str_contains($buffer, 'test.INFO: hello jeely'));
        assertTrue(str_contains($buffer, '"extra":1'));
    },

    'logger_respects_min_level' => function (): void {
        $buffer = '';
        $logger = (new Logger('test', Logger::WARNING))->addWriter(function (string $level, string $line) use (&$buffer) {
            $buffer .= $line;
        });

        $logger->info('hidden');
        $logger->error('shown');

        assertTrue(! str_contains($buffer, 'hidden'));
        assertTrue(str_contains($buffer, 'shown'));
    },

    'http_server_handles_get_and_post' => function (): void {
        $port = random_int(19000, 19999);
        $server = new HttpServer('127.0.0.1', $port);
        $seen = null;
        $getBody = null;
        $postBody = null;
        $failed = null;

        $server->onRequest(function (string $method, string $path, string $body) use (&$seen) {
            if ($method === 'GET' && $path === '/webhook') {
                return 'pong';
            }

            if ($method === 'POST' && $path === '/webhook') {
                $seen = $body;

                return ['status' => 200, 'body' => 'ok'];
            }

            return ['status' => 404, 'body' => 'no'];
        });

        $server->start();

        $readResponse = function ($fp, callable $onDone): void {
            $buffer = '';
            $watcher = EventLoop::onReadable($fp, function (string $watcherId) use (&$buffer, $fp, $onDone) {
                $chunk = fread($fp, 8192);
                if ($chunk === false || $chunk === '') {
                    if (! feof($fp)) {
                        return;
                    }
                    EventLoop::cancel($watcherId);
                    fclose($fp);
                    $onDone($buffer);

                    return;
                }

                $buffer .= $chunk;
                if (! str_contains($buffer, "\r\n\r\n")) {
                    return;
                }

                [$headers, $body] = explode("\r\n\r\n", $buffer, 2) + [1 => ''];
                if (preg_match('/Content-Length:\s*(\d+)/i', $headers, $m) === 1) {
                    if (strlen($body) < (int) $m[1]) {
                        return;
                    }
                    $body = substr($body, 0, (int) $m[1]);
                }

                EventLoop::cancel($watcherId);
                fclose($fp);
                $onDone($body);
            });
        };

        EventLoop::defer(function () use ($port, $readResponse, &$getBody, &$postBody, &$failed, $server, &$seen) {
            try {
                $fp = @stream_socket_client('tcp://127.0.0.1:' . $port, $errno, $errstr, 1);
                assertTrue(is_resource($fp), 'connect failed: ' . $errstr);
                stream_set_blocking($fp, false);
                fwrite($fp, "GET /webhook HTTP/1.1\r\nHost: 127.0.0.1\r\nConnection: close\r\n\r\n");

                $readResponse($fp, function (string $body) use ($port, $readResponse, &$getBody, &$postBody, &$failed, $server, &$seen) {
                    $getBody = $body;

                    try {
                        $fp2 = @stream_socket_client('tcp://127.0.0.1:' . $port, $errno, $errstr, 1);
                        assertTrue(is_resource($fp2), 'connect2 failed: ' . $errstr);
                        stream_set_blocking($fp2, false);
                        $payload = '{"update_id":1}';
                        fwrite(
                            $fp2,
                            "POST /webhook HTTP/1.1\r\nHost: 127.0.0.1\r\nContent-Type: application/json\r\nContent-Length: "
                            . strlen($payload)
                            . "\r\nConnection: close\r\n\r\n"
                            . $payload
                        );

                        $readResponse($fp2, function (string $body) use (&$postBody, $server, &$seen, &$failed, &$getBody) {
                            $postBody = $body;
                            try {
                                assertEquals('pong', $getBody);
                                assertEquals('ok', $postBody);
                                assertEquals('{"update_id":1}', $seen);
                            } catch (Throwable $e) {
                                $failed = $e;
                            }
                            $server->stop();
                        });
                    } catch (Throwable $e) {
                        $failed = $e;
                        $server->stop();
                    }
                });
            } catch (Throwable $e) {
                $failed = $e;
                $server->stop();
            }
        });

        EventLoop::delay(2.0, function () use ($server) {
            $server->stop();
        });

        EventLoop::run();

        if ($failed instanceof Throwable) {
            throw $failed;
        }

        assertEquals('pong', $getBody);
        assertEquals('ok', $postBody);
        assertEquals('{"update_id":1}', $seen);
    },
];
