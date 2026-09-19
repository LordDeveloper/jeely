<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jeely\Async\Loop;
use Jeely\Browser;
use Jeely\Http\Request;

return [
    'request_get_is_async' => function (): void {
        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], '{"ok":true}'),
        ]);

        $browser = Browser::factory(['handler' => HandlerStack::create($mock)]);
        Loop::enable($browser);

        $response = wait(Request::withClient($browser)->asJson()->get('https://example.com/api'));

        assertTrue($response->successful());
        assertSame(['ok' => true], $response->json());
    },

    'request_post_sends_json' => function (): void {
        $mock = new MockHandler([
            new Response(201, [], '{"id":1}'),
        ]);

        $browser = Browser::factory(['handler' => HandlerStack::create($mock)]);
        $response = wait(Request::withClient($browser)->post('https://example.com/items', ['name' => 'tea']));

        assertSame(201, $response->status());
        assertSame(1, $response->json()['id']);
    },
];
