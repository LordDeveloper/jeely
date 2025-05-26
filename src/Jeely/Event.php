<?php

namespace Jeely;

use Closure;
use Illuminate\Support\Facades\Request;
use Jeely\Enums\UpdateType;
use Jeely\TLObject\Types\Error;
use Jeely\TLObject\Types\Update;

use Exception;

/**
 * @psalm-return
 */
class Event
{
    private Telegram $telegram;

    public function __construct(string $token, $config = [])
    {
        $this->telegram = new Telegram($token, $config);
    }

    public function listen(UpdateType $type, Closure $callback, array $options = [])
    {
        $telegram = $this->telegram;
        $logger = $telegram->logger;

        switch ($type) {
            case UpdateType::WEBHOOK:
                if ($update = json_decode(file_get_contents('php://input'), true)) {
                    $update = new Update($update, share: compact(
                        'telegram'
                    ));
        
                    // Callback must be an instance of Closure and binds to Telegram object
                    $callback = $callback->bindTo($telegram);
        
                    $callback($update);
                }
        
                gc_collect_cycles();
                break;
            case UpdateType::GET_UPDATES:
                // Delete webhooks before hearing updates
                $telegram->deleteWebhook();
        
                declare(ticks=1);
                pcntl_signal(SIGCHLD, function ($signo) use ($logger) {
                    while (($pid = pcntl_waitpid(-1, $status, WNOHANG)) > 0) {
                        if ($status = pcntl_wexitstatus($status)) {
                            $logger->error('Child process exited with error: ' . $status);
                        }
                    }
                });

                while (true) {
                    $updates = $telegram->getUpdates(array_merge([
                        'timeout' => 1,
                    ], $options));

                    if (! is_array($updates) && $updates instanceof Error) {
                        if ($updates->getErrorCode() !== 409) {
                            $logger->error('Update error: ' . $updates->getErrorCode() . ', Description: ' . $updates->getDescription());
                            
                            throw new Exception('Update error: ' . $updates->getErrorCode());
                        }

                        continue;
                    }

                    foreach ($updates as $update) {
                        $pid = pcntl_fork();
                        if ($pid == -1) {
                            $logger->error('Could not fork process');
                            throw new Exception('Could not fork process');
                        } else if ($pid) {
                            // We are the parent process
                            // Do nothing
                        } else {
                            // We are the child process
                            $callback = $callback->bindTo($this->telegram);

                            // Callback must be an instance of Closure and binds to Telegram object
                            try {
                                $callback($update);
                            } catch (\Throwable $e) {
                                $logger->error($e);
                                exit(1);
                            }

                            exit(0);
                        }
                        if (isset($update->update_id)) {
                            $options['offset'] = $update->update_id + 1;
                        } else {
                            $options['offset'] = -1;
                        }
                    }

                    // gc_collect_cycles();
                    usleep(100000);
                }
        }
    }
}
