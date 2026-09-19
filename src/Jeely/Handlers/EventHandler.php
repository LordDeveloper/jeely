<?php

namespace Jeely\Handlers;

use Jeely\Api\Update;
use Jeely\Container\Container;
use Jeely\Container\ContainerException;
use Jeely\Telegram;

/**
 * MadelineProto-style event handler base class with DI access.
 *
 * Override typed handlers (onMessage, onCallbackQuery, ...) or onAny().
 * Returning null from a typed handler falls through to onAny().
 */
abstract class EventHandler
{
    protected Telegram $telegram;

    protected Container $container;

    /** @var array<int, callable(\Jeely\Api\Update, callable(\Jeely\Api\Update): mixed): mixed> */
    private array $middleware = [];

    final public function boot(Telegram $telegram, Container $container): void
    {
        $this->telegram = $telegram;
        $this->container = $container;
        $this->onBoot();
    }

    /**
     * Called once after the handler is wired into the bot container.
     */
    protected function onBoot(): void
    {
    }

    /**
     * @param  callable(\Jeely\Api\Update, callable(\Jeely\Api\Update): mixed): mixed  $middleware
     */
    final public function middleware(callable $middleware): self
    {
        $this->middleware[] = $middleware;

        return $this;
    }

    /**
     * @return array<int, callable(\Jeely\Api\Update, callable(\Jeely\Api\Update): mixed): mixed>
     */
    final public function getMiddleware(): array
    {
        return $this->middleware;
    }

    final public function handleUpdate(Update $update): mixed
    {
        return HandlerInvoker::invoke($this, $update);
    }

    public function onAny(Update $update): mixed
    {
        return null;
    }

    public function onMessage(Update $update): mixed
    {
        return null;
    }

    public function onEditedMessage(Update $update): mixed
    {
        return null;
    }

    public function onChannelPost(Update $update): mixed
    {
        return null;
    }

    public function onEditedChannelPost(Update $update): mixed
    {
        return null;
    }

    public function onBusinessConnection(Update $update): mixed
    {
        return null;
    }

    public function onBusinessMessage(Update $update): mixed
    {
        return null;
    }

    public function onEditedBusinessMessage(Update $update): mixed
    {
        return null;
    }

    public function onDeletedBusinessMessages(Update $update): mixed
    {
        return null;
    }

    public function onMessageReaction(Update $update): mixed
    {
        return null;
    }

    public function onMessageReactionCount(Update $update): mixed
    {
        return null;
    }

    public function onInlineQuery(Update $update): mixed
    {
        return null;
    }

    public function onChosenInlineResult(Update $update): mixed
    {
        return null;
    }

    public function onCallbackQuery(Update $update): mixed
    {
        return null;
    }

    public function onShippingQuery(Update $update): mixed
    {
        return null;
    }

    public function onPreCheckoutQuery(Update $update): mixed
    {
        return null;
    }

    public function onPoll(Update $update): mixed
    {
        return null;
    }

    public function onPollAnswer(Update $update): mixed
    {
        return null;
    }

    public function onMyChatMember(Update $update): mixed
    {
        return null;
    }

    public function onChatMember(Update $update): mixed
    {
        return null;
    }

    public function onChatJoinRequest(Update $update): mixed
    {
        return null;
    }

    public function onPurchasedPaidMedia(Update $update): mixed
    {
        return null;
    }

    public function __get(string $name): mixed
    {
        if ($this->container->has($name)) {
            return $this->container->get($name);
        }

        throw new ContainerException('Unknown handler property: ' . $name);
    }
}
