<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithPreCheckoutQuery
{
    use ResolvesTelegramParams;

    public function answer(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('answerPreCheckoutQuery', $this->telegramOptions([
            'pre_checkout_query_id' => $this->id,
            'ok' => true,
        ], $this->extras($args)));
    }

    public function reject(string $errorMessage, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('answerPreCheckoutQuery', $this->telegramOptions([
            'pre_checkout_query_id' => $this->id,
            'ok' => false,
            'error_message' => $errorMessage,
        ], $this->extras($args)));
    }
}
