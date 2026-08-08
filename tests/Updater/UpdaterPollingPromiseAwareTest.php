<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use GuzzleHttp\Promise\FulfilledPromise;
use Jeely\Api\Types\Update as TypesUpdate;
use Jeely\Telegram;
use Jeely\Updater;

return [
    'waitPolling_awaits_promise_return_from_callback' => function (): void {
        $fakeTelegram = new class ([
            [['update_id' => 1]],
            [['update_id' => 2]],
        ]) extends Telegram {
            private array $sequence;

            public function __construct(array $sequence)
            {
                parent::__construct('123:ABC');
                $this->sequence = $sequence;
            }

            public function deleteWebhook($params = [])
            {
                return true;
            }

            public function getUpdates($options = [])
            {
                $batch = array_shift($this->sequence);
                if ($batch === null) {
                    return [];
                }

                $updates = [];
                foreach ($batch as $updatePayload) {
                    $updates[] = new TypesUpdate($updatePayload);
                }

                return $updates;
            }
        };

        $updater = new class ($fakeTelegram, 2) extends Updater {
            private int $max;

            public function __construct(Telegram $telegram, int $max)
            {
                parent::__construct('123:ABC');
                $this->max = $max;

                $ref = new ReflectionClass(Updater::class);
                $prop = $ref->getProperty('telegram');
                $prop->setAccessible(true);
                $prop->setValue($this, $telegram);

                $disp = $ref->getProperty('dispatcher');
                $disp->setAccessible(true);
                $disp->setValue($this, new \Jeely\Update\UpdateDispatcher($telegram, 8));
            }

            protected function shouldStopAfterProcessed(int $processedUpdates): bool
            {
                return $processedUpdates >= $this->max;
            }
        };

        $processed = 0;

        $updater->waitPolling(function ($update) use (&$processed) {
            $processed++;

            return new FulfilledPromise($update->update_id);
        });

        assertEquals(2, $processed, 'processed count mismatch');
    },

    'handleWebhookAsync_supports_promise_callback' => function (): void {
        $updater = new Updater('123:ABC');
        $seen = null;

        $promise = $updater->handleWebhookAsync(function ($update) use (&$seen) {
            $seen = $update->update_id;

            return new FulfilledPromise('done');
        }, json_encode([
            'update_id' => 55,
            'message' => [
                'message_id' => 1,
                'date' => 1,
                'chat' => ['id' => 1, 'type' => 'private'],
                'text' => 'hi',
            ],
        ]));

        assertEquals('done', $promise->wait());
        assertEquals(55, $seen);
    },

    'runPollingAsync_processes_batch_concurrently' => function (): void {
        $fakeTelegram = new class ([
            [
                ['update_id' => 10],
                ['update_id' => 11],
                ['update_id' => 12],
            ],
        ]) extends Telegram {
            private array $sequence;
            public array $offsets = [];

            public function __construct(array $sequence)
            {
                parent::__construct('123:ABC');
                $this->sequence = $sequence;
            }

            public function deleteWebhook($params = [])
            {
                return true;
            }

            public function getUpdates($options = [])
            {
                $this->offsets[] = $options['offset'] ?? null;
                $batch = array_shift($this->sequence);

                if ($batch === null) {
                    return [];
                }

                return array_map(
                    fn ($payload) => new TypesUpdate($payload),
                    $batch
                );
            }
        };

        $updater = new class ($fakeTelegram, 3) extends Updater {
            private int $max;
            private Telegram $fake;

            public function __construct(Telegram $telegram, int $max)
            {
                parent::__construct('123:ABC');
                $this->max = $max;
                $this->fake = $telegram;

                $ref = new ReflectionClass(Updater::class);
                $prop = $ref->getProperty('telegram');
                $prop->setAccessible(true);
                $prop->setValue($this, $telegram);

                $disp = $ref->getProperty('dispatcher');
                $disp->setAccessible(true);
                $disp->setValue($this, (new \Jeely\Update\UpdateDispatcher($telegram, 3)));
            }

            protected function shouldStopAfterProcessed(int $processedUpdates): bool
            {
                return $processedUpdates >= $this->max && count($this->fake->offsets) > 1;
            }
        };

        $ids = [];
        $updater->concurrency(3)->waitPolling(function ($update) use (&$ids) {
            $ids[] = $update->update_id;

            return new FulfilledPromise($update->update_id);
        });

        sort($ids);
        assertEquals([10, 11, 12], $ids);
        assertEquals(13, $fakeTelegram->offsets[1] ?? null);
    },

    'telegram_async_mode_returns_promise' => function (): void {
        $telegram = new class ('1:A') extends Telegram {
            public function fetchAsync(string $uri, array $fields = []): \GuzzleHttp\Promise\PromiseInterface
            {
                return new FulfilledPromise([
                    'id' => 1,
                    'is_bot' => true,
                    'first_name' => 'Bot',
                ]);
            }
        };

        $result = $telegram->async()->getMe();
        assertTrue($result instanceof \GuzzleHttp\Promise\PromiseInterface);
        $user = $result->wait();
        assertEquals('Bot', $user->first_name);
    },
];
