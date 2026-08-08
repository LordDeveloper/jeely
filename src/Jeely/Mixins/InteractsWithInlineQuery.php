<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithInlineQuery
{
    public function answer(array $results, ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->answerInlineQuery(...array_merge($args, [
            'inline_query_id' => $this->id,
            'results' => $results,
        ]));
    }
}
