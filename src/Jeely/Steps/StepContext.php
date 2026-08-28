<?php

namespace Jeely\Steps;

use Jeely\Api\Update;
use Jeely\Api\Types\CallbackQuery;
use Jeely\Api\Types\Message;
use Jeely\Telegram;

/**
 * Runtime context passed into enter/handle/complete/cancel callbacks.
 */
final class StepContext
{
    private mixed $input = null;

    private ?string $error = null;

    public function __construct(
        public readonly StepManager $manager,
        public StepSession $session,
        public readonly ?Update $update = null,
        public readonly ?Telegram $telegram = null,
    ) {
    }

    public function flow(): string
    {
        return $this->session->flow;
    }

    public function step(): string
    {
        return $this->session->step;
    }

    public function botId(): string
    {
        return $this->session->key->botId;
    }

    public function userId(): string
    {
        return $this->session->key->userId;
    }

    public function chatId(): ?string
    {
        return $this->session->key->chatId;
    }

    public function put(string $key, mixed $value): self
    {
        $this->session->put($key, $value);

        return $this;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->session->get($key, $default);
    }

    public function has(string $key): bool
    {
        return $this->session->has($key);
    }

    public function forget(string $key): self
    {
        $this->session->forget($key);

        return $this;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function merge(array $values): self
    {
        $this->session->merge($values);

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function all(): array
    {
        return $this->session->data;
    }

    public function putHere(string $key, mixed $value): self
    {
        $this->session->putStep($this->session->step, $key, $value);

        return $this;
    }

    public function getHere(?string $key = null, mixed $default = null): mixed
    {
        return $this->session->getStep($this->session->step, $key, $default);
    }

    public function setInput(mixed $input): self
    {
        $this->input = $input;

        return $this;
    }

    public function input(): mixed
    {
        return $this->input;
    }

    public function text(): ?string
    {
        if (is_string($this->input)) {
            return $this->input;
        }

        $message = $this->message();

        return $message?->text;
    }

    public function callbackData(): ?string
    {
        $cq = $this->callbackQuery();

        return $cq?->data;
    }

    public function message(): ?Message
    {
        return $this->update?->message();
    }

    public function callbackQuery(): ?CallbackQuery
    {
        $payload = $this->update?->payload();

        return $payload instanceof CallbackQuery ? $payload : null;
    }

    public function fail(string $message): StepAction
    {
        $this->error = $message;

        return StepAction::retry($message);
    }

    public function error(): ?string
    {
        return $this->error;
    }

    public function next(mixed $payload = null): StepAction
    {
        return StepAction::next($payload);
    }

    public function back(mixed $payload = null): StepAction
    {
        return StepAction::back($payload);
    }

    public function stay(mixed $payload = null): StepAction
    {
        return StepAction::stay($payload);
    }

    public function jump(string $step, mixed $payload = null): StepAction
    {
        return StepAction::jump($step, $payload);
    }

    public function repeat(mixed $payload = null): StepAction
    {
        return StepAction::repeat($payload);
    }

    public function cancel(mixed $payload = null): StepAction
    {
        return StepAction::cancel($payload);
    }

    public function complete(mixed $payload = null): StepAction
    {
        return StepAction::complete($payload);
    }

    public function retry(mixed $payload = null): StepAction
    {
        return StepAction::retry($payload);
    }

    /**
     * Convenience reply to the active chat when Telegram context exists.
     */
    public function reply(string $text, array $extras = []): mixed
    {
        $chatId = $this->resolveChatId();
        if ($this->telegram === null || $chatId === null) {
            return null;
        }

        return $this->telegram->sendMessage(array_merge($extras, [
            'chat_id' => $chatId,
            'text' => $text,
        ]));
    }

    public function resolveChatId(): int|string|null
    {
        if ($this->session->key->chatId !== null) {
            return is_numeric($this->session->key->chatId)
                ? (int) $this->session->key->chatId
                : $this->session->key->chatId;
        }

        $message = $this->message();
        if ($message?->chat?->id !== null) {
            return $message->chat->id;
        }

        return is_numeric($this->session->key->userId)
            ? (int) $this->session->key->userId
            : $this->session->key->userId;
    }
}
