---
title: HTTP Request
parent: Guide
nav_order: 5
---

# HTTP Request

Jeely wraps Guzzle with promise-based helpers. The HTTP client **shares the same Browser instance** as Telegram — one event loop, no extra blocking.

## From Bot

```php
$response = $bot->request()
    ->asJson()
    ->timeout(10)
    ->get('https://api.example.com/users', ['page' => 1]);

$result = wait($response);
echo $result->json()['name'];
```

## From EventHandler

```php
public function onMessage(Update $update): mixed
{
    return $this->request
        ->asJson()
        ->get('https://jsonplaceholder.typicode.com/todos/1')
        ->then(function (HttpResponse $response) use ($update) {
            $title = $response->json()['title'] ?? '?';
            return $update->reply("Todo: {$title}");
        });
}
```

## PendingRequest API

| Method | Description |
|--------|-------------|
| `get($url, $query = [])` | GET request |
| `post($url, $data = [])` | POST JSON body |
| `put($url, $data = [])` | PUT JSON body |
| `patch($url, $data = [])` | PATCH JSON body |
| `delete($url, $data = [])` | DELETE |
| `asJson()` | Set Accept + Content-Type JSON |
| `bearerToken($token)` | Authorization header |
| `withHeaders($array)` | Merge headers |
| `timeout($seconds)` | Request timeout |

## HttpResponse

| Method | Description |
|--------|-------------|
| `status()` | HTTP status code |
| `body()` | Raw body string |
| `json($assoc = true)` | Decode JSON |
| `successful()` | 2xx status |
| `failed()` | Non-2xx |
| `header($name, $default)` | Response header |

## Parallel requests

```php
use Jeely\Http\HttpResponse;

$client = $this->request->asJson()->timeout(10);

$promise = all([
    $client->get('https://api.example.com/a'),
    $client->get('https://api.example.com/b'),
    $client->get('https://api.example.com/c'),
]);

$promise->then(function (array $responses) {
    foreach ($responses as $r) {
        assert($r instanceof HttpResponse);
    }
});
```

## Standalone (no Bot)

```php
use Jeely\Http\Request;

$response = wait(Request::get('https://httpbin.org/get'));
```

See the **requestbot** example for `/todo`, `/quote`, and `/parallel` commands.

Next: [Text Formatters](formatters)
