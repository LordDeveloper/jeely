<?php

declare(strict_types=1);

namespace Examples\Progressbot;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;
use Jeely\Api\Update;
use Jeely\Async\Await;
use Jeely\Handlers\EventHandler;

/**
 * Demo bot: long jobs return promises + delay() so polling and other chats stay responsive.
 */
final class ProgressHandler extends EventHandler
{
    private int $activeJobs = 0;

    public function onMessage(Update $update): mixed
    {
        $text = trim((string) ($update->message()?->text ?? ''));

        if ($text === '') {
            return null;
        }

        if ($text === '/start' || $text === '/help') {
            return $this->reply($update, $this->helpText());
        }

        if ($text === '/ping') {
            return $this->reply($update, sprintf(
                "pong — %s\njobs in flight: %d",
                date('H:i:s'),
                $this->activeJobs,
            ));
        }

        if (str_starts_with($text, '/progress')) {
            $seconds = $this->intArg($text, default: 6, min: 2, max: 30);

            return $this->track($this->runProgress($update, $seconds));
        }

        if (str_starts_with($text, '/parallel')) {
            $workers = $this->intArg($text, default: 4, min: 2, max: 8);

            return $this->track($this->runParallel($update, $workers));
        }

        return null;
    }

    private function helpText(): string
    {
        return implode("\n", [
            'Progressbot — async demo',
            '',
            '/progress [sec]  progress bar (Timer::delay, non-blocking)',
            '/parallel [n]    n workers finish in parallel',
            '/ping            instant reply while jobs run',
            '',
            'Tip: start /progress 15 then /ping from another chat — both work.',
        ]);
    }

    private function runProgress(Update $update, int $seconds): PromiseInterface
    {
        $jobId = substr(uniqid('', true), -6);
        $this->logger->info('progress job {id} started ({seconds}s)', [
            'id' => $jobId,
            'seconds' => $seconds,
        ]);

        return $this->reply($update, $this->progressText($jobId, 0, $seconds))
            ->then(function (Message|Error|null $message) use ($jobId, $seconds) {
                if (! $message instanceof Message) {
                    return null;
                }

                return $this->tickProgress($message, $jobId, 1, $seconds);
            })
            ->then(function ($result) use ($jobId, $seconds) {
                $this->logger->info('progress job {id} finished', ['id' => $jobId, 'seconds' => $seconds]);

                return $result;
            });
    }

    private function tickProgress(Message $message, string $jobId, int $step, int $total): PromiseInterface
    {
        if ($step > $total) {
            return Await::promise($message->editText("✅ job {$jobId} done"));
        }

        return delay(1)->then(function () use ($message, $jobId, $step, $total) {
            return Await::promise($message->editText($this->progressText($jobId, $step, $total)))
                ->then(fn () => $this->tickProgress($message, $jobId, $step + 1, $total));
        });
    }

    private function runParallel(Update $update, int $workers): PromiseInterface
    {
        $jobId = substr(uniqid('', true), -6);
        $state = array_fill(1, $workers, '⏳ waiting');

        $this->logger->info('parallel job {id} started ({workers} workers)', [
            'id' => $jobId,
            'workers' => $workers,
        ]);

        return $this->reply($update, $this->parallelText($jobId, $state))
            ->then(function (Message|Error|null $message) use ($jobId, $workers, $state) {
                if (! $message instanceof Message) {
                    return null;
                }

                $promises = [];
                for ($i = 1; $i <= $workers; $i++) {
                    $delaySeconds = 1 + ($i * 0.7);
                    $promises[] = delay($delaySeconds)->then(function () use ($message, $jobId, &$state, $i, $delaySeconds) {
                        $state[$i] = sprintf('✅ %.1fs', $delaySeconds);

                        $this->logger->debug('worker {worker} done for job {id}', [
                            'worker' => $i,
                            'id' => $jobId,
                        ]);

                        return Await::promise($message->editText($this->parallelText($jobId, $state)));
                    });
                }

                return Await::all($promises)->then(function () use ($message, $jobId, $workers) {
                    $this->logger->info('parallel job {id} finished ({workers} workers)', [
                        'id' => $jobId,
                        'workers' => $workers,
                    ]);

                    return $message->editText("✅ job {$jobId}: all {$workers} workers finished in parallel.");
                });
            });
    }

    private function progressText(string $jobId, int $step, int $total): string
    {
        $pct = $total > 0 ? (int) round(($step / $total) * 100) : 100;
        $filled = (int) round($pct / 10);
        $bar = str_repeat('█', $filled) . str_repeat('░', 10 - $filled);

        return implode("\n", [
            "job {$jobId}",
            "[{$bar}] {$pct}%",
            "step {$step}/{$total}",
            '',
            'event loop is free — try /ping meanwhile',
        ]);
    }

    /** @param array<int, string> $state */
    private function parallelText(string $jobId, array $state): string
    {
        $lines = ["parallel job {$jobId}", ''];

        foreach ($state as $id => $status) {
            $lines[] = "worker {$id}: {$status}";
        }

        $lines[] = '';
        $lines[] = 'workers run concurrently via delay(), not sleep()';

        return implode("\n", $lines);
    }

    private function reply(Update $update, string $text): PromiseInterface
    {
        return Await::promise($update->reply($text));
    }

    private function track(PromiseInterface $promise): PromiseInterface
    {
        $this->activeJobs++;

        $release = function (mixed $value) {
            $this->activeJobs = max(0, $this->activeJobs - 1);

            return $value;
        };

        return $promise->then($release, function (mixed $reason) use ($release) {
            return Await::promise($reason)->then($release, $release);
        });
    }

    private function intArg(string $text, int $default, int $min, int $max): int
    {
        $parts = preg_split('/\s+/', $text, 2);
        $value = isset($parts[1]) ? (int) $parts[1] : $default;

        return max($min, min($max, $value));
    }
}
