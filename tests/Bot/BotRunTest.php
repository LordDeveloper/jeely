<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Api\Update;
use Jeely\Api\Update as TypesUpdate;
use Jeely\Bot;
use Jeely\Handlers\EventHandler;
use Jeely\Telegram;
use Jeely\Update\UpdateHandlerMode;
use Jeely\Updater;

final class TestPollingHandler extends EventHandler
{
    public static ?string $seen = null;

    public function onMessage(Update $update): mixed
    {
        self::$seen = (string) ($update->message->text ?? '');

        return 'ok';
    }
}

final class TestFallbackHandler extends EventHandler
{
    public static ?string $seen = null;

    public function onAny(Update $update): mixed
    {
        self::$seen = $update->type();

        return 'any';
    }
}

return [
    'bot_run_polling_with_event_handler_class' => function (): void {
        [$bot] = createTestBot([
            [['update_id' => 10, 'message' => ['message_id' => 1, 'date' => 1, 'chat' => ['id' => 1, 'type' => 'private'], 'text' => 'ping']]],
        ]);

        TestPollingHandler::$seen = null;

        $bot->run(mode: UpdateHandlerMode::Polling)
            ->withHandler(TestPollingHandler::class)
            ->start();

        assertSame('ping', TestPollingHandler::$seen);
    },

    'bot_run_supports_fluent_withHandler_chain' => function (): void {
        [$bot] = createTestBot([
            [['update_id' => 11, 'callback_query' => ['id' => '1', 'from' => ['id' => 1, 'is_bot' => false, 'first_name' => 'A'], 'chat_instance' => 'x', 'data' => 'ok']]],
        ]);

        TestPollingHandler::$seen = null;
        TestFallbackHandler::$seen = null;

        $bot->run(
            mode: UpdateHandlerMode::Polling,
            options: ['timeout' => 5, 'allowed_updates' => ['callback_query']],
        )
            ->withHandler(new TestPollingHandler())
            ->withHandler(TestFallbackHandler::class)
            ->withHandler(new class extends EventHandler {
                public static ?string $seen = null;

                public function onAny(Update $update): mixed
                {
                    self::$seen = 'anon';

                    return null;
                }
            })
            ->start();

        assertSame(null, TestPollingHandler::$seen);
        assertSame('callback_query', TestFallbackHandler::$seen);
    },
];

/**
 * @param  array<int, array<int, array<string, mixed>>>  $sequence
 * @return array{0: Bot}
 */
function createTestBot(array $sequence): array
{
    $fakeTelegram = new class ($sequence) extends Telegram {
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

    $innerUpdater = new class ($fakeTelegram) extends Updater {
        public function __construct(Telegram $telegram)
        {
            parent::__construct('123:ABC');

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
            return $processedUpdates >= 1;
        }
    };

    $bot = new Bot('123:ABC');
    $ref = new ReflectionClass(Bot::class);
    $prop = $ref->getProperty('updater');
    $prop->setAccessible(true);
    $prop->setValue($bot, $innerUpdater);

    return [$bot];
}
