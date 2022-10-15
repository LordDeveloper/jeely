<?php

namespace Jeely;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;

class Browser extends HttpClient
{
    private array $config = [];

    public function __construct(array $options = [])
    {
        $options[RequestOptions::HTTP_ERRORS] = false;

        parent::__construct($options);
    }

    public static function factory(array $options = []): Browser
    {
        return new self($options);
    }

    public function requestAsync(string $method, $uri = '', array $options = []): PromiseInterface
    {
        return parent::requestAsync($method, $uri, array_merge(
            $this->config, $options
        ));
    }

    public function withHeaders(array $headers): Browser
    {
        return clone $this->withConfig([
            RequestOptions::HEADERS => $headers,
        ]);
    }

    public function withConfig(array $config): Browser
    {
        $self = clone $this;
        $self->config += $config;
        return $self;
    }

    public function allowRedirects(bool $allowRedirects = true): Browser
    {
        return clone $this->withConfig([
            RequestOptions::ALLOW_REDIRECTS => $allowRedirects,
        ]);
    }

    public function withAuth(mixed $auth): Browser
    {
        return clone $this->withConfig([
            RequestOptions::AUTH => $auth,
        ]);
    }

    public function withBody(mixed $body): Browser
    {
        return clone $this->withConfig([
            RequestOptions::BODY => $body,
        ]);
    }

    public function withCertificates(mixed $certs): Browser
    {
        return clone $this->withConfig([
            RequestOptions::CERT => $certs,
        ]);
    }

    public function withCookies(CookieJarInterface $cookies): Browser
    {
        return clone $this->withConfig([
            RequestOptions::COOKIES => $cookies,
        ]);
    }

    public function withConnectionTimeout($timeout): Browser
    {
        return clone $this->withConfig([
            RequestOptions::CONNECT_TIMEOUT => $timeout,
        ]);
    }

    public function debugging($debug = true): Browser
    {
        return clone $this->withConfig([
            RequestOptions::DEBUG => $debug,
        ]);
    }
}