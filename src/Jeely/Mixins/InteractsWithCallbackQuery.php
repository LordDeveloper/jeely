<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithCallbackQuery
{
    use ResolvesTelegramParams;

    /**
     * @return array{chat_id:int|string|null,message_id:int|null,inline_message_id:?string}
     */
    protected function callbackMessageTarget(): array
    {
        $chatId = null;
        $messageId = null;
        $message = $this->message ?? null;

        if ($message !== null) {
            $messageId = $message->message_id ?? null;
            $chat = $message->chat ?? null;

            if ($chat instanceof \Jeely\Api\Types\Chat) {
                $chatId = $chat->id;
            } elseif (is_array($chat)) {
                $chatId = $chat['id'] ?? null;
            }
        }

        return [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $this->inline_message_id ?? null,
        ];
    }

    /**
     * Answer the callback query.
     *
     * Canonical: `answer(?string $text = null, bool $showAlert = false, ...$options)`
     * Legacy BC: `answer('msg', ['sign' => false])` — second arg as options array.
     */
    public function answer(?string $text = null, mixed $showAlert = false, ...$args): Error|PromiseInterface|bool
    {
        $extra = [];

        if (is_array($showAlert)) {
            $extra = $showAlert;
            $showAlert = false;
        } else {
            $showAlert = (bool) $showAlert;
        }

        return $this->callTelegram('answerCallbackQuery', $this->telegramOptions([
            'callback_query_id' => $this->id,
            'text' => $text,
            'show_alert' => $showAlert,
        ], array_replace($extra, $this->extras($args))));
    }

    public function alert(string $text, ...$args): Error|PromiseInterface|bool
    {
        return $this->answer($text, true, ...$args);
    }

    public function edit(mixed $text = null, ...$args): PromiseInterface|Error|bool|Message
    {
        // Legacy BC: edit(['caption' => '...', 'sign' => false, 'buttons' => ...])
        if (is_array($text)) {
            $options = array_replace($text, $this->extras($args));
            $body = $options['text'] ?? null;
            unset($options['text']);

            if ($body !== null && $body !== '') {
                return $this->editText((string) $body, $options);
            }

            if (array_key_exists('rich_message', $options)) {
                return $this->editRich($options['rich_message'], $options);
            }

            if (array_key_exists('caption', $options)) {
                return $this->editCaption((string) $options['caption'], $options);
            }

            return $this->editMarkup($options);
        }

        $options = $this->extras($args);

        if (array_key_exists('rich_message', $options)) {
            return $this->editRich($options['rich_message'], $options);
        }

        if ($text !== null) {
            return $this->editText($text, $options);
        }

        if (array_key_exists('caption', $options)) {
            return $this->editCaption((string) $options['caption'], $options);
        }

        return $this->editMarkup($options);
    }

    public function editText(string $text, ...$args): PromiseInterface|Error|bool|Message
    {
        return $this->callTelegram('editMessageText', $this->telegramOptions([
            ...$this->callbackMessageTarget(),
            'text' => $text,
        ], $this->extras($args)));
    }

    public function editRich(array|string $markdown, ...$args): PromiseInterface|Error|bool|Message
    {
        $options = $this->extras($args);
        $rich = is_array($markdown)
            ? $markdown
            : ['markdown' => $markdown, 'is_rtl' => $options['is_rtl'] ?? true];

        unset($options['is_rtl']);

        return $this->callTelegram('editMessageText', $this->telegramOptions([
            ...$this->callbackMessageTarget(),
            'rich_message' => $rich,
        ], $options));
    }

    public function editCaption(?string $caption = null, ...$args): PromiseInterface|Error|bool|Message
    {
        return $this->callTelegram('editMessageCaption', $this->telegramOptions([
            ...$this->callbackMessageTarget(),
            'caption' => $caption,
        ], $this->extras($args)));
    }

    public function editMarkup(...$args): PromiseInterface|Error|bool|Message
    {
        return $this->callTelegram('editMessageReplyMarkup', $this->telegramOptions([
            ...$this->callbackMessageTarget(),
        ], $this->extras($args)));
    }

    public function delete(...$args): Error|PromiseInterface|bool
    {
        if ($this->message === null) {
            return false;
        }

        return $this->message->delete(...$args);
    }
}
