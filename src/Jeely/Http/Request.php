<?php

namespace Jeely\Http;

use Jeely\Browser;

/**
 * Async HTTP client (Guzzle promises + shared Revolt loop).
 */
final class Request
{
    private static ?Browser $client = null;

    public static function client(?Browser $browser = null): PendingRequest
    {
        if ($browser !== null) {
            return new PendingRequest($browser);
        }

        self::$client ??= Browser::factory();

        return new PendingRequest(self::$client);
    }

    public static function withClient(Browser $browser): PendingRequest
    {
        return new PendingRequest($browser);
    }

    public static function get(string $url, array $query = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return self::client()->get($url, $query);
    }

    public static function post(string $url, array $data = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return self::client()->post($url, $data);
    }
}
