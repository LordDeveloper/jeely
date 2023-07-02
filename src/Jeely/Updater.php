<?php

namespace Jeely;

use Closure;
use Illuminate\Support\Facades\Request;
use Jeely\TL\Types\Error;
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

    public function waitWebhook(Closure $callback)
    {
        if ($update = \json_decode(\class_exists(Request::class) ? Request::getContent() : file_get_contents('php://input'), true)) {
            $update = new Update($update);

            // Callback must be an instance of Closure and binds to Telegram object
            $callback = $callback->bindTo($this->telegram);

            $callback($update->setTelegramRecursive($this->telegram));
        }

        gc_collect_cycles();
    }

    public function waitPolling(Closure $callback, array $options = [])
    {
        $telegram = $this->telegram;
        // Delete webhooks before hearing updates
        $telegram->deleteWebhook();

        while (true) {
            $updates = $telegram->getUpdates($options);

            if (! is_array($updates) && $updates instanceof Error) {
                if ($updates->getErrorCode() !== 409) {
                    throw new \Exception($updates->getDescription());
                }

                continue;
            }

            foreach ($updates as $update) {
                $callback = $callback->bindTo($telegram);

                // Callback must be an instance of Closure and binds to Telegram object
                try {
                    $callback($update);
                } catch (\Throwable $e) {
                    trigger_error($e->getMessage());
                }

                $options['offset'] = $update->update_id + 1;
            }

            gc_collect_cycles();
        }
    }
}
