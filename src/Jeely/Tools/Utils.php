<?php

namespace Jeely\Tools;

use Stringable;

class Utils
{
    public static function isStringable($value): bool
    {
        return is_object($value) && (
            method_exists($value, '__toString') || $value instanceof Stringable
        );
    }

    public static function isJson($value): bool
    {
        return is_string($value) && json_decode($value) && json_last_error() === JSON_ERROR_NONE;
    }
}