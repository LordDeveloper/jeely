<?php

namespace Jeely\Update;

use Jeely\Telegram;

/**
 * Normalizes options passed to {@see Bot::run()} and {@see Updater} wait methods.
 */
final class RunOptions
{
    /**
     * Read async flag from options and remove recognized keys.
     */
    public static function pullAsync(array &$options, bool $default = true): bool
    {
        if (array_key_exists('async', $options)) {
            $async = (bool) $options['async'];
            unset($options['async']);

            return $async;
        }

        if (array_key_exists('asynchronous', $options)) {
            $async = (bool) $options['asynchronous'];
            unset($options['asynchronous']);

            return $async;
        }

        return $default;
    }

    /**
     * Apply async mode to Telegram and strip it from options.
     */
    public static function applyAsync(Telegram $telegram, array &$options, bool $default = true): bool
    {
        $async = self::pullAsync($options, $default);
        $telegram->async($async);

        return $async;
    }
}
