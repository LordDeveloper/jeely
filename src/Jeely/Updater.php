<?php

namespace Jeely;

use Closure;
use Jeely\TL\Update;

/**
 * @psalm-return
 */
class Updater
{
    private Telegram $telegram;

    public function __construct(string $token, array $browserConfig = [])
    {
        $this->telegram = new Telegram($token, $browserConfig);
    }

    public function waitWebhook(callable $callback)
    {
        if ($update = json_decode(file_get_contents('php://input'), true)) {
            $update = new Update($update);

            $callback($update->setTelegramRecursive($this->telegram));
        }

        gc_collect_cycles();
    }

    public function waitPolling(callable $callback, array $options = [])
    {
        $telegram = $this->telegram;
        // Delete webhooks before hearing updates
        $telegram->deleteWebhook();

        while (true) {
            $updates = $telegram->getUpdates($options);

            foreach ($updates as $update) {
                if ($callback instanceof Closure) {
                    $callback->bindTo($telegram);
                }

                $callback($update);

                $options['offset'] = $update->update_id + 1;
            }

            gc_collect_cycles();
        }
    }
}
