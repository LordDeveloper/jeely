<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\ChatMember;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithUser
{
    use ResolvesTelegramParams;

    protected function booted(): void
    {
        if (isset($this['first_name'])) {
            $this['full_name'] = trim(implode(' ', array_filter([
                $this['first_name'] ?? null,
                $this['last_name'] ?? null,
            ])));
        }
    }

    public function notify(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->send($text, ...$args);
    }

    public function send(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendMessage', $this->telegramOptions([
            'chat_id' => $this->id,
            'text' => $text,
        ], $this->extras($args)));
    }

    public function sendRich(array|string $markdown, ...$args): Error|PromiseInterface|Message
    {
        $options = $this->extras($args);
        $rich = is_array($markdown)
            ? $markdown
            : ['markdown' => $markdown, 'is_rtl' => $options['is_rtl'] ?? true];

        unset($options['is_rtl']);

        return $this->callTelegram('sendRichMessage', $this->telegramOptions([
            'chat_id' => $this->id,
            'rich_message' => $rich,
        ], $options));
    }

    /**
     * @param  array<int, int|string>  $chats
     * @return array<int|string, bool>
     */
    public function isMemberOf(array $chats = []): array
    {
        $results = [];

        foreach ($chats as $chat) {
            $response = $this->telegram->getChatMember([
                'chat_id' => $chat,
                'user_id' => $this->id,
                'async' => false,
            ]);

            if ($response instanceof ChatMember) {
                $results[$chat] = ! in_array($response->status, ['kicked', 'left'], true);
                continue;
            }

            $results[$chat] = false;
        }

        return $results;
    }
}
