<?php

declare(strict_types=1);

namespace Examples\Requestbot;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Update;
use Jeely\Async\Await;
use Jeely\Handlers\EventHandler;
use Jeely\Http\HttpResponse;
use Jeely\Tools\Html;

/**
 * Demo bot: async HTTP via $this->request (shared Guzzle + Revolt loop).
 */
final class RequestHandler extends EventHandler
{
    public function onMessage(Update $update): mixed
    {
        $text = trim((string) ($update->message()?->text ?? ''));

        if ($text === '' || ! str_starts_with($text, '/')) {
            return null;
        }

        if ($text === '/start' || $text === '/help') {
            return $this->reply($update, $this->helpText());
        }

        if ($text === '/ping') {
            return $this->reply($update, 'pong — try /todo or /quote while a fetch runs');
        }

        if (str_starts_with($text, '/todo')) {
            $id = $this->intArg($text, default: 1, min: 1, max: 200);

            return $this->fetchTodo($update, $id);
        }

        if ($text === '/quote') {
            return $this->fetchQuote($update);
        }

        if ($text === '/parallel') {
            return $this->fetchParallel($update);
        }

        return null;
    }

    private function helpText(): string
    {
        return implode("\n", [
            'Requestbot — async HTTP demo',
            '',
            '/todo [id]    GET jsonplaceholder todo',
            '/quote        random quote from api',
            '/parallel     3 requests in parallel',
            '/ping         instant reply during fetches',
            '',
            'Uses $this->request — same browser/loop as Telegram.',
        ]);
    }

    private function fetchTodo(Update $update, int $id): PromiseInterface
    {
        return $this->reply($update, "fetching todo #{$id}...")
            ->then(fn () => $this->request
                ->asJson()
                ->timeout(10)
                ->get("https://jsonplaceholder.typicode.com/todos/{$id}"))
            ->then(fn (HttpResponse $response) => $this->formatTodo($response))
            ->then(fn (string $body) => $this->reply($update, $body, parseMode: 'HTML'));
    }

    private function fetchQuote(Update $update): PromiseInterface
    {
        return $this->reply($update, 'fetching quote...')
            ->then(fn () => $this->request
                ->asJson()
                ->get('https://api.quotable.io/random'))
            ->then(function (HttpResponse $response) use ($update) {
                if ($response->failed()) {
                    return $this->reply($update, 'quote API failed: HTTP ' . $response->status());
                }

                $data = $response->json();
                $quote = (string) ($data['content'] ?? '');
                $author = (string) ($data['author'] ?? 'unknown');

                $text = Html::blockquote($quote) . "\n\n— " . Html::bold($author);

                return $this->reply($update, $text, parseMode: 'HTML');
            });
    }

    private function fetchParallel(Update $update): PromiseInterface
    {
        return $this->reply($update, 'running 3 parallel GETs...')
            ->then(function () {
                $client = $this->request->asJson()->timeout(10);

                return all([
                    $client->get('https://jsonplaceholder.typicode.com/todos/1'),
                    $client->get('https://jsonplaceholder.typicode.com/todos/2'),
                    $client->get('https://jsonplaceholder.typicode.com/todos/3'),
                ]);
            })
            ->then(function (array $responses) use ($update) {
                $lines = ['Parallel results:', ''];

                foreach ($responses as $index => $response) {
                    if (! $response instanceof HttpResponse) {
                        continue;
                    }

                    $title = (string) ($response->json()['title'] ?? '?');
                    $lines[] = ($index + 1) . '. ' . Html::code(mb_substr($title, 0, 40) . '…');
                }

                return $this->reply($update, implode("\n", $lines), parseMode: 'HTML');
            });
    }

    private function formatTodo(HttpResponse $response): string
    {
        if ($response->failed()) {
            return 'HTTP ' . $response->status();
        }

        $data = $response->json();
        $done = ($data['completed'] ?? false) ? 'done' : 'open';

        return implode("\n", [
            Html::bold('Todo #' . ($data['id'] ?? '?')),
            Html::code((string) ($data['title'] ?? '')),
            'status: ' . Html::bold($done),
        ]);
    }

    private function reply(Update $update, string $text, ?string $parseMode = null): PromiseInterface
    {
        $options = ['async' => true];
        if ($parseMode !== null) {
            $options['parse_mode'] = $parseMode;
        }

        return Await::promise($update->reply($text, $options));
    }

    private function intArg(string $text, int $default, int $min, int $max): int
    {
        $parts = preg_split('/\s+/', $text, 2);
        $value = isset($parts[1]) ? (int) $parts[1] : $default;

        return max($min, min($max, $value));
    }
}
