<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithShippingQuery
{
    public function answer(array $shippingOptions = [], ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->answerShippingQuery(...array_merge($args, [
            'shipping_query_id' => $this->id,
            'ok' => true,
            'shipping_options' => $shippingOptions,
        ]));
    }

    public function reject(string $errorMessage, ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->answerShippingQuery(...array_merge($args, [
            'shipping_query_id' => $this->id,
            'ok' => false,
            'error_message' => $errorMessage,
        ]));
    }
}
