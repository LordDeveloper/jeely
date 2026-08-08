<?php

namespace Jeely\Api\Methods;

use Jeely\Nectar;
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

    protected function call(Telegram $telegram)
    {
        $params = $this->toArray();
        $async = array_key_exists('async', $params)
            ? (bool) $params['async']
            : $telegram->isAsync();
        unset($params['async']);

        $promise = $telegram->fetchAsync($this->getName(), $params)->then(function ($response) use ($telegram) {
            if ($response instanceof Nectar) {
                return $response->withTelegram($telegram);
            }

            $castsTo = $this->castsTo();
            $isList = str_ends_with($castsTo, '[]');
            if ($isList) {
                $castsTo = substr($castsTo, 0, -2);
            }

            $convert = function ($value) use ($telegram, $castsTo) {
                return $this->castResponse($value, $castsTo, $telegram);
            };

            if ($isList) {
                if (! is_array($response)) {
                    return [];
                }

                return array_map($convert, $response);
            }

            return $convert($response);
        });

        return $async ? $promise : $promise->wait();
    }

    private function castResponse(mixed $response, string $castsTo, Telegram $telegram): mixed
    {
        $primitives = [
            'bool', 'boolean', 'int', 'integer', 'float', 'double', 'string', 'array', 'object', 'null',
        ];

        if (in_array($castsTo, $primitives, true)) {
            if ($castsTo === 'null') {
                return null;
            }
            settype($response, $castsTo === 'boolean' ? 'bool' : ($castsTo === 'integer' ? 'int' : $castsTo));
            return $response;
        }

        // Union returns like Message|bool: if API returned bool, keep it
        if (is_bool($response) || is_int($response) || is_float($response) || is_string($response)) {
            return $response;
        }

        if (! is_array($response)) {
            return $response;
        }

        $class = $this->resolveCastClass($castsTo);
        if ($class === null || ! class_exists($class)) {
            return $response;
        }

        /** @var Nectar $casted */
        $casted = new $class($response);
        return $casted->withTelegram($telegram);
    }

    private function resolveCastClass(string $castsTo): ?string
    {
        $castsTo = ltrim($castsTo, '\\');

        if ($castsTo === 'Update') {
            return class_exists('\\Jeely\\Api\\Update') ? '\\Jeely\\Api\\Update' : '\\Jeely\\Api\\Types\\Update';
        }

        $candidates = [
            '\\Jeely\\Api\\Types\\' . $castsTo,
            '\\Jeely\\Api\\' . $castsTo,
        ];

        foreach ($candidates as $candidate) {
            if (class_exists($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    private function getName(): string
    {
        return lcfirst(basename(str_replace('\\', '/', get_class($this))));
    }

    private function toArray(): array
    {
        if (isset($this->params[0]) && is_array($this->params[0])) {
            $this->params = array_merge(
                array_shift($this->params),
                $this->params
            );
        }

        return $this->params;
    }

    private function castsTo(): string
    {
        return $this->castsTo;
    }
}
