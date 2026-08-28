<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Api\Update;
use Jeely\Steps\ArrayStepStore;
use Jeely\Steps\CacheStepStore;
use Jeely\Steps\StepAction;
use Jeely\Steps\StepKey;
use Jeely\Steps\StepManager;
use Jeely\Steps\StepValidators;
use Jeely\Cache\ArrayCache;

function stepsMakeUpdate(int $userId, string $text, int $chatId = 0): Update
{
    $chatId = $chatId !== 0 ? $chatId : $userId;

    return new Update([
        'update_id' => random_int(1, 999999),
        'message' => [
            'message_id' => random_int(1, 999999),
            'date' => time(),
            'text' => $text,
            'from' => [
                'id' => $userId,
                'is_bot' => false,
                'first_name' => 'Test',
            ],
            'chat' => [
                'id' => $chatId,
                'type' => 'private',
            ],
        ],
    ]);
}

return [
    'steps_flow_collects_data_and_completes' => function (): void {
        $manager = (new StepManager(new ArrayStepStore()))->forBot(1001);
        $completed = null;

        $manager->flow('register', function ($flow) use (&$completed) {
            $flow->step('name', function ($step) {
                $step->enter(fn ($ctx) => 'ask-name');
                $step->handle(function ($ctx) {
                    $ctx->put('name', trim((string) $ctx->text()));

                    return $ctx->next();
                });
            });

            $flow->step('age', function ($step) {
                $step->enter(fn ($ctx) => 'ask-age');
                $step->validate(StepValidators::all([
                    StepValidators::required(),
                    StepValidators::integer('age must be int'),
                ]));
                $step->handle(function ($ctx) {
                    $ctx->put('age', (int) $ctx->text());

                    return $ctx->next();
                });
            });

            $flow->onComplete(function ($ctx) use (&$completed) {
                $completed = $ctx->all();

                return 'done';
            });
        });

        $u1 = stepsMakeUpdate(42, '/start');
        assertSame('ask-name', $manager->start('register', $u1));
        assertTrue($manager->isActive($u1));

        assertSame('ask-age', $manager->handle(stepsMakeUpdate(42, 'Ali')));
        assertSame('Ali', $manager->get(stepsMakeUpdate(42, 'x'), 'name'));

        $errors = [];
        $manager->onValidationError(function ($ctx, $message) use (&$errors) {
            $errors[] = $message;

            return 'invalid';
        });

        assertSame('invalid', $manager->handle(stepsMakeUpdate(42, 'abc')));
        assertSame(['age must be int'], $errors);

        assertSame('done', $manager->handle(stepsMakeUpdate(42, '20')));
        assertFalse($manager->isActive(stepsMakeUpdate(42, 'x')));
        assertSame(['name' => 'Ali', 'age' => 20], $completed);
    },

    'steps_back_jump_repeat_cancel_actions' => function (): void {
        $manager = (new StepManager())->forBot('bot-a');
        $cancelled = false;

        $manager->flow('wizard', function ($flow) use (&$cancelled) {
            $flow->add('a', fn () => 'enter-a', function ($ctx) {
                $ctx->put('a', $ctx->text());

                return $ctx->next();
            });
            $flow->add('b', fn () => 'enter-b', function ($ctx) {
                $text = (string) $ctx->text();
                if ($text === 'back') {
                    return $ctx->back();
                }
                if ($text === 'repeat') {
                    return $ctx->repeat();
                }
                if ($text === 'cancel') {
                    return $ctx->cancel();
                }

                $ctx->put('b', $text);

                return $ctx->next();
            });
            $flow->onCancel(function () use (&$cancelled) {
                $cancelled = true;

                return 'cancelled';
            });
        });

        $update = stepsMakeUpdate(7, 'go');
        $manager->start('wizard', $update);
        $manager->handle(stepsMakeUpdate(7, 'one'));
        assertSame('enter-a', $manager->back($update));
        assertSame('enter-b', $manager->jump($update, 'b'));
        assertSame('enter-b', $manager->handle(stepsMakeUpdate(7, 'repeat')));
        assertSame('cancelled', $manager->handle(stepsMakeUpdate(7, 'cancel')));
        assertTrue($cancelled);
        assertFalse($manager->isActive(stepsMakeUpdate(7, 'x')));
    },

    'steps_jump_skip_and_step_data' => function (): void {
        $manager = (new StepManager())->forBot(1);

        $manager->flow('skippy', function ($flow) {
            $flow->step('intro', function ($step) {
                $step->enter(fn () => 'intro');
                $step->handle(fn ($ctx) => $ctx->jump('done'));
            });
            $flow->step('maybe', function ($step) {
                $step->skipIf(fn () => true);
                $step->enter(fn () => 'should-not-enter');
            });
            $flow->step('done', function ($step) {
                $step->enter(function ($ctx) {
                    $ctx->putHere('flag', true);

                    return 'enter-done';
                });
                $step->handle(fn ($ctx) => $ctx->complete());
            });
            $flow->onComplete(fn ($ctx) => $ctx->getHere('flag'));
        });

        assertSame('intro', $manager->start('skippy', stepsMakeUpdate(9, 'x')));
        assertSame('enter-done', $manager->handle(stepsMakeUpdate(9, 'go')));

        $session = $manager->sessionFor(stepsMakeUpdate(9, 'x'));
        assertTrue($session->getStep('done', 'flag') === true);
        assertTrue($manager->handle(stepsMakeUpdate(9, 'finish')) === true);
    },

    'steps_isolation_by_bot_and_user' => function (): void {
        $store = new ArrayStepStore();
        $a = (new StepManager($store))->forBot('bot-1');
        $b = (new StepManager($store))->forBot('bot-2');

        $a->flow('f', function ($flow) {
            $flow->add('s', fn () => 'a', fn ($ctx) => $ctx->stay());
        });
        $b->flow('f', function ($flow) {
            $flow->add('s', fn () => 'b', fn ($ctx) => $ctx->stay());
        });

        $a->start('f', stepsMakeUpdate(1, 'x'));
        $b->start('f', stepsMakeUpdate(1, 'x'));

        assertTrue($a->isActive(stepsMakeUpdate(1, 'x')));
        assertTrue($b->isActive(stepsMakeUpdate(1, 'x')));

        $keyA = StepKey::make('bot-1', 1);
        $keyB = StepKey::make('bot-2', 1);
        assertTrue($store->get($keyA) !== null);
        assertTrue($store->get($keyB) !== null);
        assertTrue($keyA->toString() !== $keyB->toString());
    },

    'steps_cache_store_persists_session' => function (): void {
        $cache = new ArrayCache();
        $store = new CacheStepStore($cache, 't.', 60);
        $manager = (new StepManager($store))->forBot(55);

        $manager->flow('x', function ($flow) {
            $flow->add('one', fn () => 'hi', function ($ctx) {
                $ctx->put('v', 1);

                return StepAction::stay();
            });
        });

        $manager->start('x', stepsMakeUpdate(3, 'start'));
        $manager->handle(stepsMakeUpdate(3, 'data'));

        $manager2 = (new StepManager($store))->forBot(55);
        $manager2->flow('x', function ($flow) {
            $flow->add('one', fn () => 'hi', fn ($ctx) => $ctx->stay());
        });

        assertTrue($manager2->isActive(stepsMakeUpdate(3, 'x')));
        assertSame(1, $manager2->get(stepsMakeUpdate(3, 'x'), 'v'));
    },

    'steps_drops_session_when_flow_is_gone' => function (): void {
        $store = new ArrayStepStore();
        $old = (new StepManager($store))->forBot(1);
        $old->flow('hello', function ($flow) {
            $flow->add('name', fn () => 'ask', fn ($ctx) => $ctx->stay());
        });
        $old->start('hello', stepsMakeUpdate(42, 'hi'));

        $fresh = (new StepManager($store))->forBot(1);
        $fresh->flow('shop', function ($flow) {
            $flow->add('product', fn () => 'shop', fn ($ctx) => $ctx->stay());
        });

        $update = stepsMakeUpdate(42, 'again');
        assertFalse($fresh->isActive($update));
        assertSame(null, $fresh->handle($update));
        assertSame('shop', $fresh->start('shop', $update));
    },
];
