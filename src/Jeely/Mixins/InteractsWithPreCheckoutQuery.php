<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithPreCheckoutQuery
{
    public function answer(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->answerPreCheckoutQuery(...array_merge($args, [
            'pre_checkout_query_id' => $this->id,
            'ok' => true,
        ]));
    }

    public function reject(string $errorMessage, ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->answerPreCheckoutQuery(...array_merge($args, [
            'pre_checkout_query_id' => $this->id,
            'ok' => false,
            'error_message' => $errorMessage,
        ]));
    }
}
