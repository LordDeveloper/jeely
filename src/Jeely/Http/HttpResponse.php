<?php

namespace Jeely\Http;

use Psr\Http\Message\ResponseInterface;

final class HttpResponse
{
    public function __construct(private ResponseInterface $response)
    {
    }

    public function status(): int
    {
        return $this->response->getStatusCode();
    }

    public function body(): string
    {
        return (string) $this->response->getBody();
    }

    public function json(bool $assoc = true): mixed
    {
        return json_decode($this->body(), $assoc);
    }

    public function successful(): bool
    {
        return $this->status() >= 200 && $this->status() < 300;
    }

    public function failed(): bool
    {
        return ! $this->successful();
    }

    public function header(string $name, mixed $default = null): mixed
    {
        return $this->response->getHeaderLine($name) ?: $default;
    }

    public function psr(): ResponseInterface
    {
        return $this->response;
    }
}
