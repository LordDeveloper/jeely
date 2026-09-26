<?php

namespace Jeely\Mixins;

/**
 * Normalizes variadic Telegram API option arrays for bound mixin methods.
 */
trait ResolvesTelegramParams
{
    /**
     * @param  array<int|string, mixed>  $args
     * @return array<string, mixed>
     */
    protected function extras(array $args): array
    {
        if ($args === []) {
            return [];
        }

        // Named leftovers: notify(text: '...', buttons: $x, sign: false)
        // → ...$args is ['buttons' => $x, 'sign' => false] (string keys, not a list).
        if (! array_is_list($args)) {
            /** @var array<string, mixed> $args */
            return $args;
        }

        if (count($args) === 1 && is_array($args[0] ?? null)) {
            /** @var array<string, mixed> $options */
            $options = $args[0];

            return $options;
        }

        throw new \InvalidArgumentException('Pass Telegram API options as a single associative array.');
    }

    /**
     * @param  array<string, mixed>  $payload
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    protected function telegramOptions(array $payload, array $options = []): array
    {
        return array_merge($payload, $options);
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    protected function callTelegram(string $method, array $payload): mixed
    {
        return $this->telegram->{$method}($payload);
    }
}
