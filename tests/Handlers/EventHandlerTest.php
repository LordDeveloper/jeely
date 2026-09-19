<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Api\Update;
use Jeely\Cache\ArrayCache;
use Jeely\Cache\Cache;
use Jeely\Container\Container;
use Jeely\Handlers\EventHandler;
use Jeely\Handlers\HandlerInvoker;
use Jeely\Telegram;
use Jeely\Update\MiddlewarePipeline;

return [
    'handler_invoker_routes_message_to_onMessage' => function (): void {
        $handler = new class extends EventHandler {
            public ?string $seen = null;

            public function onMessage(Update $update): mixed
            {
                $this->seen = (string) ($update->message->text ?? '');

                return 'handled';
            }
        };

        $handler->boot(new Telegram('123:ABC'), new Container());
        $update = new Update(['update_id' => 1, 'message' => ['message_id' => 1, 'date' => 1, 'chat' => ['id' => 1, 'type' => 'private'], 'text' => 'hello']]);

        $result = HandlerInvoker::invoke($handler, $update);

        assertSame('handled', $result);
        assertSame('hello', $handler->seen);
    },

    'handler_falls_back_to_onAny' => function (): void {
        $handler = new class extends EventHandler {
            public ?string $seen = null;

            public function onAny(Update $update): mixed
            {
                $this->seen = $update->type();

                return 'any';
            }
        };

        $handler->boot(new Telegram('123:ABC'), new Container());
        $update = new Update(['update_id' => 2, 'callback_query' => ['id' => '1', 'from' => ['id' => 1, 'is_bot' => false, 'first_name' => 'A'], 'chat_instance' => 'x', 'data' => 'ok']]);

        assertSame('any', HandlerInvoker::invoke($handler, $update));
        assertSame('callback_query', $handler->seen);
    },

    'handler_exposes_container_services_via_magic_get' => function (): void {
        Cache::setDefault(new ArrayCache());

        $handler = new class extends EventHandler {
            public function readCache(): mixed
            {
                return $this->cache;
            }
        };

        $container = new Container();
        $container->singleton('cache', static fn () => Cache::store());
        $handler->boot(new Telegram('123:ABC'), $container);

        assertInstanceOf(ArrayCache::class, $handler->readCache());
    },

    'middleware_pipeline_runs_in_order' => function (): void {
        $order = [];

        $pipeline = new MiddlewarePipeline([
            static function ($update, $next) use (&$order) {
                $order[] = 'a';

                return $next($update);
            },
            static function ($update, $next) use (&$order) {
                $order[] = 'b';

                return $next($update);
            },
        ]);

        $update = new Update(['update_id' => 3, 'message' => ['message_id' => 1, 'date' => 1, 'chat' => ['id' => 1, 'type' => 'private'], 'text' => 'x']]);
        $pipeline->process($update, static function () use (&$order) {
            $order[] = 'handler';

            return 'done';
        });

        assertSame(['a', 'b', 'handler'], $order);
    },
];
