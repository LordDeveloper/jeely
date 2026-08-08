<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

if (! function_exists('assertTrue')) {
    function assertTrue(bool $cond, string $message = 'assertTrue failed'): void
    {
        if (! $cond) {
            throw new Exception($message);
        }
    }
}

if (! function_exists('assertSame')) {
    function assertSame(mixed $expected, mixed $actual, string $message = 'assertSame failed'): void
    {
        if ($expected !== $actual) {
            throw new Exception($message . ' | expected=' . var_export($expected, true) . ' actual=' . var_export($actual, true));
        }
    }
}

if (! function_exists('assertEquals')) {
    function assertEquals(mixed $expected, mixed $actual, string $message = 'assertEquals failed'): void
    {
        if ($expected != $actual) {
            throw new Exception($message . ' | expected=' . var_export($expected, true) . ' actual=' . var_export($actual, true));
        }
    }
}

if (! function_exists('assertFalse')) {
    function assertFalse(bool $cond, string $message = 'assertFalse failed'): void
    {
        if ($cond) {
            throw new Exception($message);
        }
    }
}

if (! function_exists('assertInstanceOf')) {
    function assertInstanceOf(string $class, mixed $obj, string $message = 'assertInstanceOf failed'): void
    {
        if (! ($obj instanceof $class)) {
            throw new Exception($message . ' | expected=' . $class . ' actual=' . (is_object($obj) ? get_class($obj) : gettype($obj)));
        }
    }
}

