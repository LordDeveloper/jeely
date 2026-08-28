<?php

namespace Jeely\Steps;

/**
 * Common validators for step input.
 */
final class StepValidators
{
    /**
     * @return callable(StepContext):true|string
     */
    public static function required(string $message = 'This field is required.'): callable
    {
        return static function (StepContext $ctx) use ($message): true|string {
            $text = $ctx->text();

            return ($text !== null && trim($text) !== '') ? true : $message;
        };
    }

    /**
     * @return callable(StepContext):true|string
     */
    public static function minLength(int $min, string $message = ''): callable
    {
        $message = $message !== '' ? $message : "Minimum length is {$min}.";

        return static function (StepContext $ctx) use ($min, $message): true|string {
            $text = (string) ($ctx->text() ?? '');

            return mb_strlen(trim($text)) >= $min ? true : $message;
        };
    }

    /**
     * @return callable(StepContext):true|string
     */
    public static function maxLength(int $max, string $message = ''): callable
    {
        $message = $message !== '' ? $message : "Maximum length is {$max}.";

        return static function (StepContext $ctx) use ($max, $message): true|string {
            $text = (string) ($ctx->text() ?? '');

            return mb_strlen(trim($text)) <= $max ? true : $message;
        };
    }

    /**
     * @return callable(StepContext):true|string
     */
    public static function numeric(string $message = 'Please send a number.'): callable
    {
        return static function (StepContext $ctx) use ($message): true|string {
            $text = trim((string) ($ctx->text() ?? ''));

            return is_numeric($text) ? true : $message;
        };
    }

    /**
     * @return callable(StepContext):true|string
     */
    public static function integer(string $message = 'Please send an integer.'): callable
    {
        return static function (StepContext $ctx) use ($message): true|string {
            $text = trim((string) ($ctx->text() ?? ''));

            return preg_match('/^-?\d+$/', $text) === 1 ? true : $message;
        };
    }

    /**
     * @param  list<string>  $options
     * @return callable(StepContext):true|string
     */
    public static function oneOf(array $options, string $message = 'Invalid option.'): callable
    {
        $normalized = array_map(static fn ($v) => mb_strtolower((string) $v), $options);

        return static function (StepContext $ctx) use ($normalized, $message): true|string {
            $text = mb_strtolower(trim((string) ($ctx->text() ?? '')));

            return in_array($text, $normalized, true) ? true : $message;
        };
    }

    /**
     * @param  list<callable(StepContext):true|string>  $validators
     * @return callable(StepContext):true|string
     */
    public static function all(array $validators): callable
    {
        return static function (StepContext $ctx) use ($validators): true|string {
            foreach ($validators as $validator) {
                $result = $validator($ctx);
                if ($result !== true) {
                    return $result === false ? 'Invalid input.' : (string) $result;
                }
            }

            return true;
        };
    }

    /**
     * @return callable(StepContext):true|string
     */
    public static function regex(string $pattern, string $message = 'Invalid format.'): callable
    {
        return static function (StepContext $ctx) use ($pattern, $message): true|string {
            $text = (string) ($ctx->text() ?? '');

            return preg_match($pattern, $text) === 1 ? true : $message;
        };
    }
}
