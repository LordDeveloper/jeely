<?php

namespace Jeely\TL\Methods;


use Jeely\Container;
use Jeely\LazyUpdates;
use Jeely\Telegram;

class MethodDefinition
{
    protected array $params = [];

    protected string $castsTo = 'string';

    public function __set($name, $value)
    {
        if (is_null($name)) {
            $this->params[] = $value;
        } else {
            $this->params[$name] = $value;
        }
    }

    protected function call()
    {
        return Container::get(Telegram::class)->fetchAsync(
            $this->getName(), $this->toArray()
        )->then(function ($response) {
            if ($response instanceof LazyUpdates) {
                return $response;
            } elseif ($isList = str_ends_with($castsTo = $this->castsTo(), '[]')) {
                $castsTo = rtrim($castsTo, '[]');
            }

            $convert = function ($response) use ($castsTo) {
                if (is_array($response) && class_exists($_cast = '\\Jeely\\TL\\Types\\' . $castsTo)) {
                    return new $_cast($response);
                }

                settype($response, $castsTo);

                return $response;
            };

            return $isList ? array_map($convert, $response) : $convert($response);
        })->wait();
    }

    private function getName(): string
    {
        return lcfirst(basename(str_replace('\\', '/', get_class($this))));
    }

    private function toArray(): array
    {
        if (isset($this->params[0])) {
            $this->params = array_merge(
                array_shift($this->params), $this->params
            );
        }

        return $this->params;
    }

    private function castsTo(): string
    {
        return $this->castsTo;
    }
}