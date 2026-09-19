<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithShippingQuery
{
    use ResolvesTelegramParams;

    public function answer(array $shippingOptions = [], ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('answerShippingQuery', $this->telegramOptions([
            'shipping_query_id' => $this->id,
            'ok' => true,
            'shipping_options' => $shippingOptions,
        ], $this->extras($args)));
    }

    public function reject(string $errorMessage, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('answerShippingQuery', $this->telegramOptions([
            'shipping_query_id' => $this->id,
            'ok' => false,
            'error_message' => $errorMessage,
        ], $this->extras($args)));
    }
}
