<?php

namespace Jeely\Mixins;

use Jeely\Nectar;
use Jeely\Api\Types\Chat;
use Jeely\Api\Types\Message;
use Jeely\Api\Types\User;

/**
 * Ergonomic helpers for resolving the active payload on an Update.
 */
trait InteractsWithUpdate
{
    /**
     * Name of the first populated update field (e.g. message, callback_query).
     */
    public function type(): ?string
    {
        foreach (array_keys(static::JSON_PROPERTY_MAP) as $field) {
            if ($field === 'update_id') {
                continue;
            }

            if (isset($this[$field])) {
                return $field;
            }
        }

        return null;
    }

    /**
     * The concrete update payload object for {@see type()}.
     */
    public function payload(): mixed
    {
        $type = $this->type();

        return $type === null ? null : $this[$type];
    }

    /**
     * First available Message-like field on this update.
     */
    public function message(): ?Message
    {
        foreach ([
            'message',
            'edited_message',
            'channel_post',
            'edited_channel_post',
            'business_message',
            'edited_business_message',
            'guest_message',
        ] as $field) {
            if (isset($this[$field]) && $this[$field] instanceof Message) {
                return $this[$field];
            }
        }

        if (! isset($this->callback_query)) {
            return null;
        }

        $msg = $this->callback_query->message ?? null;

        if ($msg instanceof Message) {
            return $msg;
        }

        if ($msg instanceof Nectar) {
            $data = $msg->toArray();

            // Inaccessible messages always have date = 0.
            if ((int) ($data['date'] ?? 0) === 0 && ! isset($data['text'], $data['caption'])) {
                return null;
            }

            return new Message($data);
        }

        return null;
    }

    public function from(): ?User
    {
        $payload = $this->payload();

        if ($payload === null) {
            return null;
        }

        if ($payload instanceof Message) {
            return $payload->from ?? null;
        }

        if (isset($payload->from) && $payload->from instanceof User) {
            return $payload->from;
        }

        if (isset($payload->user) && $payload->user instanceof User) {
            return $payload->user;
        }

        return null;
    }

    public function chat(): ?Chat
    {
        $message = $this->message();
        if ($message?->chat instanceof Chat) {
            return $message->chat;
        }

        $payload = $this->payload();

        if ($payload !== null && isset($payload->chat) && $payload->chat instanceof Chat) {
            return $payload->chat;
        }

        if (isset($this->callback_query)) {
            $nested = $this->callback_query->message ?? null;
            $chat = is_object($nested) ? ($nested->chat ?? null) : null;

            if ($chat instanceof Chat) {
                return $chat;
            }

            if (is_array($chat)) {
                return new Chat($chat);
            }
        }

        return null;
    }

    public function is(string ...$types): bool
    {
        $current = $this->type();

        return $current !== null && in_array($current, $types, true);
    }

    /**
     * Share common update context (type / chat / from / message) into the graph.
     */
    protected function boot(): void
    {
        $this->share(array_filter([
            'update_type' => $this->type(),
            'chat' => $this->chat(),
            'from' => $this->from(),
            'message' => $this->message(),
        ], static fn ($value) => $value !== null));
    }
}
