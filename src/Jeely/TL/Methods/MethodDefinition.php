<?php

namespace Jeely\TL\Methods;


use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Container;
use Jeely\Telegram;
use LazyJsonMapper\LazyJsonMapper;
use Psr\Http\Message\ResponseInterface;

class MethodDefinition
{
    public bool $ok = true;

    public function isOk(): bool
    {
        return $this->ok;
    }

    private function toArray(): array
    {
        return array_merge(
            $this->vars, get_object_vars($this)
        );
    }

    private function getName(): string
    {
        return lcfirst(basename(str_replace('\\', '/', get_class($this))));
    }

    private function castsTo(): string
    {
        return $this->castsTo;
    }

    protected function call()
    {
        return Container::get(Telegram::class)->fetchAsync(
            $this->getName(), $this->toArray()
        )->then(function ($response) {
            if ($isList = str_ends_with($castsTo = $this->castsTo(), '[]')) {
                $castsTo = rtrim($castsTo, '[]');
            }

            $convert = function ($response) use ($castsTo) {
                if (is_array($response) && class_exists($_cast = '\\Jeely\\TL\\Types\\'. $castsTo)) {
                    return new $_cast($response);
                } elseif ($response instanceof LazyJsonMapper) {
                    return $response;
                }

                settype($response, $castsTo);

                return $response;
            };

            return $isList ? array_map($convert, $response) : $convert($response);
        })->wait();
    }
}