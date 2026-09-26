<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithInlineQuery
{
    use ResolvesTelegramParams;

    /**
     * Answer an inline query.
     *
     * Canonical: `answer(array $results, array $options = [])`
     * Legacy BC: `answer(['results' => $results, 'is_personal' => true, ...])`
     */
    public function answer(array $results, ...$args): Error|PromiseInterface|bool
    {
        $options = $this->extras($args);

        if ($this->isInlineAnswerPayload($results)) {
            $options = array_replace($results, $options);
            $results = $options['results'] ?? [];
            unset($options['results']);

            if (! is_array($results)) {
                $results = [];
            }
        }

        return $this->callTelegram('answerInlineQuery', $this->telegramOptions([
            'inline_query_id' => $this->id,
            'results' => $results,
        ], $options));
    }

    /**
     * Detect assoc payload shape that already contains a `results` key.
     *
     * @param  array<mixed>  $results
     */
    private function isInlineAnswerPayload(array $results): bool
    {
        if (! array_key_exists('results', $results)) {
            return false;
        }

        return ! array_is_list($results);
    }
}
