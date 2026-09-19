<?php

declare(strict_types=1);

namespace Examples\Schedulebot;

use Jeely\Api\Update;
use Jeely\Handlers\EventHandler;

/**
 * Telegram side of schedulebot — shows cron counters and help.
 */
final class ScheduleHandler extends EventHandler
{
    public function onMessage(Update $update): mixed
    {
        $text = trim((string) ($update->message()?->text ?? ''));

        if ($text === '' || ! str_starts_with($text, '/')) {
            return null;
        }

        if ($text === '/start' || $text === '/help') {
            return $update->message()?->reply($this->helpText(), ['async' => false]);
        }

        if ($text === '/stats') {
            return $update->message()?->reply($this->statsText(), ['async' => false]);
        }

        return null;
    }

    private function helpText(): string
    {
        return implode("\n", [
            'Schedulebot — Jeely Cron demo',
            '',
            'Background tasks (see logs):',
            '  every minute   heartbeat + counter',
            '  every 15 sec   fast tick counter',
            '  daily 09:00    log + optional admin ping',
            '',
            '/stats   show live counters',
            '/help    this message',
            '',
            'Set JEELY_ADMIN_CHAT_ID to receive daily ping.',
        ]);
    }

    private function statsText(): string
    {
        $stats = StatsStore::snapshot();

        return implode("\n", [
            'Schedule counters',
            '',
            'minute ticks: ' . $stats['minute_ticks'],
            'last minute:  ' . ($stats['last_minute_at'] ?? 'never'),
            '',
            'fast ticks:   ' . $stats['fast_ticks'],
            'last fast:    ' . ($stats['last_fast_at'] ?? 'never'),
            '',
            'last daily:   ' . ($stats['last_daily_at'] ?? 'never'),
        ]);
    }
}
