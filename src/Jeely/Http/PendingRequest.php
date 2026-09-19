<?php

namespace Jeely\Http;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Jeely\Browser;

final class PendingRequest
{
    /** @var array<string, mixed> */
    private array $options = [];

    public function __construct(private Browser $client)
    {
    }

    public function withHeaders(array $headers): self
    {
        $clone = clone $this;
        $clone->options[RequestOptions::HEADERS] = array_merge(
            $clone->options[RequestOptions::HEADERS] ?? [],
            $headers,
        );

        return $clone;
    }

    public function bearerToken(string $token): self
    {
        return $this->withHeaders(['Authorization' => 'Bearer ' . $token]);
    }

    public function asJson(): self
    {
        return $this->withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ]);
    }

    public function timeout(float $seconds): self
    {
        $clone = clone $this;
        $clone->options[RequestOptions::TIMEOUT] = $seconds;

        return $clone;
    }

    public function get(string $url, array $query = []): PromiseInterface
    {
        return $this->request('GET', $url, [RequestOptions::QUERY => $query]);
    }

    public function post(string $url, array $data = []): PromiseInterface
    {
        return $this->request('POST', $url, [RequestOptions::JSON => $data]);
    }

    public function put(string $url, array $data = []): PromiseInterface
    {
        return $this->request('PUT', $url, [RequestOptions::JSON => $data]);
    }

    public function patch(string $url, array $data = []): PromiseInterface
    {
        return $this->request('PATCH', $url, [RequestOptions::JSON => $data]);
    }

    public function delete(string $url, array $data = []): PromiseInterface
    {
        return $this->request('DELETE', $url, $data === [] ? [] : [RequestOptions::JSON => $data]);
    }

    public function request(string $method, string $url, array $options = []): PromiseInterface
    {
        return $this->client
            ->requestAsync($method, $url, array_replace_recursive($this->options, $options))
            ->then(fn ($response) => new HttpResponse($response));
    }
}
