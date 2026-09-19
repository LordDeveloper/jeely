<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithInlineQuery
{
    use ResolvesTelegramParams;

    public function answer(array $results, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('answerInlineQuery', $this->telegramOptions([
            'inline_query_id' => $this->id,
            'results' => $results,
        ], $this->extras($args)));
    }
}
