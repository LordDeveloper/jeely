<?php

namespace Jeely\Mixins;

/**
 * Normalizes variadic Telegram API option arrays for bound mixin methods.
 */
trait ResolvesTelegramParams
{
    /**
     * @param  array<int, mixed>  $args
     * @return array<string, mixed>
     */
    protected function extras(array $args): array
    {
        if ($args === []) {
            return [];
        }

        if (count($args) === 1 && is_array($args[0])) {
            return $args[0];
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
