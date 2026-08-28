<?php

namespace Jeely\Steps;

use Jeely\Api\Update;
use Jeely\Api\Types\CallbackQuery;
use Jeely\Telegram;

/**
 * Conversation / wizard manager scoped by bot + user (+ optional chat).
 */
final class StepManager
{
    /** @var array<string, Flow> */
    private array $flows = [];

    private string $botId = 'default';

    private bool $includeChatInKey = false;

    private string $conflictPolicy = 'replace'; // replace | reject | keep

    private ?int $defaultTtl = 3600;

    /** @var callable(StepContext, string):mixed|null */
    private $onValidationError = null;

    public function __construct(private StepStoreInterface $store = new ArrayStepStore())
    {
    }

    public function store(): StepStoreInterface
    {
        return $this->store;
    }

    public function forBot(string|int $botId): self
    {
        $this->botId = (string) $botId;

        return $this;
    }

    public function botId(): string
    {
        return $this->botId;
    }

    /**
     * When true, sessions are keyed by bot+user+chat (useful in groups).
     */
    public function scopeByChat(bool $enabled = true): self
    {
        $this->includeChatInKey = $enabled;

        return $this;
    }

    public function defaultTtl(?int $seconds): self
    {
        $this->defaultTtl = $seconds;

        return $this;
    }

    /**
     * What to do if start() is called while another flow is active.
     * replace | reject | keep
     */
    public function onConflict(string $policy): self
    {
        $policy = strtolower($policy);
        if (! in_array($policy, ['replace', 'reject', 'keep'], true)) {
            throw new \InvalidArgumentException('Invalid conflict policy.');
        }
        $this->conflictPolicy = $policy;

        return $this;
    }

    /**
     * @param  callable(StepContext, string):mixed  $callback
     */
    public function onValidationError(callable $callback): self
    {
        $this->onValidationError = $callback;

        return $this;
    }

    /**
     * @param  callable(Flow):void|null  $configure
     */
    public function flow(string $name, ?callable $configure = null): Flow
    {
        if (! isset($this->flows[$name])) {
            $this->flows[$name] = new Flow($name);
        }

        $flow = $this->flows[$name];
        if ($configure !== null) {
            $configure($flow);
        }

        return $flow;
    }

    public function hasFlow(string $name): bool
    {
        return isset($this->flows[$name]);
    }

    public function getFlow(string $name): Flow
    {
        if (! isset($this->flows[$name])) {
            throw new \InvalidArgumentException("Unknown flow [{$name}].");
        }

        return $this->flows[$name];
    }

    public function resolveKey(Update $update, string|int|null $botId = null): ?StepKey
    {
        $user = $update->from();
        if ($user === null || ! isset($user->id)) {
            return null;
        }

        $chatId = null;
        if ($this->includeChatInKey) {
            $message = $update->message();
            $chatId = $message?->chat?->id;
            if ($chatId === null) {
                $payload = $update->payload();
                if ($payload instanceof CallbackQuery && isset($payload->message->chat->id)) {
                    $chatId = $payload->message->chat->id;
                }
            }
        }

        return StepKey::make($botId ?? $this->botId, $user->id, $chatId);
    }

    public function sessionFor(Update|StepKey $target): ?StepSession
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key === null) {
            return null;
        }

        return $this->liveSession($key);
    }

    public function isActive(Update|StepKey $target): bool
    {
        return $this->sessionFor($target) !== null;
    }

    /**
     * Start (or restart) a flow for the user in this update.
     *
     * @param  array<string, mixed>  $data  Initial bag
     */
    public function start(string $flowName, Update $update, array $data = [], ?Telegram $telegram = null): mixed
    {
        $flow = $this->getFlow($flowName);
        $first = $flow->first();
        if ($first === null) {
            throw new \LogicException("Flow [{$flowName}] has no steps.");
        }

        $key = $this->resolveKey($update);
        if ($key === null) {
            throw new \RuntimeException('Cannot resolve user from update.');
        }

        $existing = $this->store->get($key);
        if ($existing !== null) {
            if ($this->conflictPolicy === 'reject') {
                return null;
            }
            if ($this->conflictPolicy === 'keep') {
                return $this->handle($update, $telegram);
            }
            // replace
            $this->store->delete($key);
        }

        $ttl = $flow->getTtl() ?? $this->defaultTtl;
        $session = new StepSession(
            key: $key,
            flow: $flowName,
            step: $first->name,
            data: $data,
            expiresAt: $ttl === null ? null : time() + $ttl,
        );

        $telegram ??= $this->telegramFromUpdate($update);
        $ctx = new StepContext($this, $session, $update, $telegram);
        $this->persist($session, $flow);

        return $this->enterStep($flow, $first, $ctx);
    }

    /**
     * Start by explicit ids (without an Update), then optionally enter.
     *
     * @param  array<string, mixed>  $data
     */
    public function startFor(
        string $flowName,
        string|int $userId,
        string|int|null $chatId = null,
        array $data = [],
        ?Telegram $telegram = null,
        bool $enter = true,
    ): mixed {
        $flow = $this->getFlow($flowName);
        $first = $flow->first();
        if ($first === null) {
            throw new \LogicException("Flow [{$flowName}] has no steps.");
        }

        $key = StepKey::make($this->botId, $userId, $this->includeChatInKey ? $chatId : null);
        $ttl = $flow->getTtl() ?? $this->defaultTtl;
        $session = new StepSession(
            key: $key,
            flow: $flowName,
            step: $first->name,
            data: $data,
            expiresAt: $ttl === null ? null : time() + $ttl,
        );

        $this->persist($session, $flow);
        if (! $enter) {
            return $session;
        }

        $ctx = new StepContext($this, $session, null, $telegram);

        return $this->enterStep($flow, $first, $ctx);
    }

    /**
     * Process an update against the active session (if any).
     */
    public function handle(Update $update, ?Telegram $telegram = null): mixed
    {
        $key = $this->resolveKey($update);
        if ($key === null) {
            return null;
        }

        $session = $this->liveSession($key);
        if ($session === null) {
            return null;
        }

        $telegram ??= $this->telegramFromUpdate($update);
        $ctx = new StepContext($this, $session, $update, $telegram);
        $flow = $this->getFlow($session->flow);

        if ($session->isExpired()) {
            $result = $flow->runExpire($ctx);
            $this->store->delete($key);

            return $result;
        }

        $ctx->setInput($this->extractInput($update));

        $before = $flow->runBeforeEach($ctx);
        if ($before instanceof StepAction) {
            return $this->applyAction($flow, $ctx, $before);
        }

        $step = $flow->get($session->step);
        $stepBefore = $step->runBefore($ctx);
        if ($stepBefore instanceof StepAction) {
            return $this->applyAction($flow, $ctx, $stepBefore);
        }

        $valid = $step->runValidate($ctx);
        if ($valid !== true) {
            if ($this->onValidationError !== null) {
                return ($this->onValidationError)($ctx, $valid);
            }

            return $ctx->reply($valid);
        }

        $result = $step->runHandle($ctx);
        $action = $this->normalizeAction($result);

        return $this->applyAction($flow, $ctx, $action, $result);
    }

    public function cancel(Update|StepKey $target, ?Telegram $telegram = null): mixed
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key === null) {
            return null;
        }

        $session = $this->liveSession($key);
        if ($session === null) {
            return null;
        }

        $update = $target instanceof Update ? $target : null;
        $telegram ??= $update ? $this->telegramFromUpdate($update) : null;
        $ctx = new StepContext($this, $session, $update, $telegram);
        $flow = $this->getFlow($session->flow);

        return $this->applyAction($flow, $ctx, StepAction::cancel());
    }

    public function back(Update|StepKey $target, ?Telegram $telegram = null): mixed
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key === null) {
            return null;
        }

        $session = $this->liveSession($key);
        if ($session === null) {
            return null;
        }

        $update = $target instanceof Update ? $target : null;
        $telegram ??= $update ? $this->telegramFromUpdate($update) : null;
        $ctx = new StepContext($this, $session, $update, $telegram);
        $flow = $this->getFlow($session->flow);

        return $this->applyAction($flow, $ctx, StepAction::back());
    }

    public function jump(Update|StepKey $target, string $stepName, ?Telegram $telegram = null): mixed
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key === null) {
            return null;
        }

        $session = $this->liveSession($key);
        if ($session === null) {
            return null;
        }

        $update = $target instanceof Update ? $target : null;
        $telegram ??= $update ? $this->telegramFromUpdate($update) : null;
        $ctx = new StepContext($this, $session, $update, $telegram);
        $flow = $this->getFlow($session->flow);

        return $this->applyAction($flow, $ctx, StepAction::jump($stepName));
    }

    public function repeat(Update|StepKey $target, ?Telegram $telegram = null): mixed
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key === null) {
            return null;
        }

        $session = $this->liveSession($key);
        if ($session === null) {
            return null;
        }

        $update = $target instanceof Update ? $target : null;
        $telegram ??= $update ? $this->telegramFromUpdate($update) : null;
        $ctx = new StepContext($this, $session, $update, $telegram);
        $flow = $this->getFlow($session->flow);

        return $this->applyAction($flow, $ctx, StepAction::repeat());
    }

    public function put(Update|StepKey $target, string $keyName, mixed $value): bool
    {
        $session = $this->sessionFor($target);
        if ($session === null) {
            return false;
        }

        $session->put($keyName, $value);
        $flow = $this->flows[$session->flow] ?? null;
        $this->persist($session, $flow);

        return true;
    }

    public function get(Update|StepKey $target, string $keyName, mixed $default = null): mixed
    {
        return $this->sessionFor($target)?->get($keyName, $default) ?? $default;
    }

    public function clear(Update|StepKey $target): void
    {
        $key = $target instanceof StepKey ? $target : $this->resolveKey($target);
        if ($key !== null) {
            $this->store->delete($key);
        }
    }

    private function enterStep(Flow $flow, Step $step, StepContext $ctx, int $depth = 0, bool $force = false): mixed
    {
        if ($depth > 32) {
            throw new \RuntimeException('Step skip/jump recursion limit reached.');
        }

        $ctx->session->step = $step->name;

        if (! $force && $step->shouldSkip($ctx)) {
            $next = $flow->nextAfter($step->name);
            if ($next === null) {
                return $this->applyAction($flow, $ctx, StepAction::complete());
            }

            return $this->enterStep($flow, $next, $ctx, $depth + 1);
        }

        $this->persist($ctx->session, $flow);

        $before = $step->runBefore($ctx);
        if ($before instanceof StepAction) {
            return $this->applyAction($flow, $ctx, $before);
        }

        $result = $step->runEnter($ctx);
        if ($result instanceof StepAction) {
            return $this->applyAction($flow, $ctx, $result);
        }

        $this->persist($ctx->session, $flow);

        return $result;
    }

    private function applyAction(Flow $flow, StepContext $ctx, StepAction $action, mixed $original = null): mixed
    {
        return match ($action->type) {
            StepAction::STAY => $this->finishStay($flow, $ctx, $original ?? $action->payload),
            StepAction::RETRY => $this->finishRetry($flow, $ctx, $action),
            StepAction::NEXT => $this->goNext($flow, $ctx),
            StepAction::BACK => $this->goBack($flow, $ctx),
            StepAction::JUMP => $this->goJump($flow, $ctx, (string) $action->target),
            StepAction::REPEAT => $this->goRepeat($flow, $ctx),
            StepAction::CANCEL => $this->finishCancel($flow, $ctx, $action->payload),
            StepAction::COMPLETE => $this->finishComplete($flow, $ctx, $action->payload),
            default => $original,
        };
    }

    private function finishStay(Flow $flow, StepContext $ctx, mixed $result): mixed
    {
        $this->persist($ctx->session, $flow);

        return $result;
    }

    private function finishRetry(Flow $flow, StepContext $ctx, StepAction $action): mixed
    {
        $this->persist($ctx->session, $flow);
        $message = is_string($action->payload) ? $action->payload : $ctx->error();
        if ($message !== null && $message !== '') {
            return $ctx->reply($message);
        }

        return $action->payload;
    }

    private function goNext(Flow $flow, StepContext $ctx): mixed
    {
        $current = $ctx->session->step;
        $ctx->session->history[] = $current;
        $next = $flow->nextAfter($current);
        if ($next === null) {
            return $this->finishComplete($flow, $ctx, null);
        }

        return $this->enterStep($flow, $next, $ctx);
    }

    private function goBack(Flow $flow, StepContext $ctx): mixed
    {
        $previous = array_pop($ctx->session->history);
        if ($previous === null) {
            $this->persist($ctx->session, $flow);

            return $ctx->reply('Already at the first step.');
        }

        return $this->enterStep($flow, $flow->get($previous), $ctx);
    }

    private function goJump(Flow $flow, StepContext $ctx, string $stepName): mixed
    {
        if (! $flow->has($stepName)) {
            throw new \InvalidArgumentException("Cannot jump to unknown step [{$stepName}].");
        }

        if ($ctx->session->step !== $stepName) {
            $ctx->session->history[] = $ctx->session->step;
        }

        return $this->enterStep($flow, $flow->get($stepName), $ctx);
    }

    private function goRepeat(Flow $flow, StepContext $ctx): mixed
    {
        return $this->enterStep($flow, $flow->get($ctx->session->step), $ctx, 0, true);
    }

    private function finishCancel(Flow $flow, StepContext $ctx, mixed $payload): mixed
    {
        $result = $flow->runCancel($ctx) ?? $payload;
        $this->store->delete($ctx->session->key);

        return $result;
    }

    private function finishComplete(Flow $flow, StepContext $ctx, mixed $payload): mixed
    {
        $result = $flow->runComplete($ctx) ?? $payload;
        $this->store->delete($ctx->session->key);

        return $result;
    }

    private function liveSession(StepKey $key): ?StepSession
    {
        $session = $this->store->get($key);
        if ($session === null) {
            return null;
        }

        if (! isset($this->flows[$session->flow])) {
            $this->store->delete($key);

            return null;
        }

        return $session;
    }

    private function persist(StepSession $session, ?Flow $flow): void
    {
        $ttl = $flow?->getTtl() ?? $this->defaultTtl;
        $session->touch($ttl);
        $this->store->put($session);
    }

    private function normalizeAction(mixed $result): StepAction
    {
        if ($result instanceof StepAction) {
            return $result;
        }

        // Returning nothing / non-action keeps the user on the same step.
        return StepAction::stay($result);
    }

    private function telegramFromUpdate(Update $update): ?Telegram
    {
        if (method_exists($update, 'telegram')) {
            $tg = $update->telegram();

            return $tg instanceof Telegram ? $tg : null;
        }

        return null;
    }

    private function extractInput(Update $update): mixed
    {
        $payload = $update->payload();
        if ($payload instanceof CallbackQuery) {
            return $payload->data;
        }

        $message = $update->message();
        if ($message === null) {
            return null;
        }

        if (isset($message->text)) {
            return $message->text;
        }

        if (isset($message->contact)) {
            return $message->contact;
        }

        if (isset($message->location)) {
            return $message->location;
        }

        if (isset($message->photo)) {
            return $message->photo;
        }

        if (isset($message->document)) {
            return $message->document;
        }

        if (isset($message->voice)) {
            return $message->voice;
        }

        return $message;
    }
}
