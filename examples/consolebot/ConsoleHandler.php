<?php

declare(strict_types=1);

namespace Examples\Consolebot;

use Jeely\Api\Update;
use Jeely\Handlers\EventHandler;

/**
 * Telegram side of consolebot — explains how to run CLI commands.
 */
final class ConsoleHandler extends EventHandler
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

        if ($text === '/commands') {
            $lines = ['Registered CLI commands:', ''];

            foreach ($this->console->commands() as $command) {
                $lines[] = sprintf('  %-12s %s', $command->name(), $command->description());
            }

            $lines[] = '';
            $lines[] = 'Run from project root:';
            $lines[] = '  php console.php ping';
            $lines[] = '  php console.php info';
            $lines[] = '  php console.php list';

            return $update->message()?->reply(implode("\n", $lines), ['async' => false]);
        }

        return null;
    }

    private function helpText(): string
    {
        return implode("\n", [
            'Consolebot — Jeely Console demo',
            '',
            'This bot runs in Telegram, but the console lives in CLI.',
            '',
            '/commands   list registered CLI commands',
            '/help       this message',
            '',
            'Try in terminal:',
            '  php console.php list',
            '  php console.php ping',
            '  php console.php info',
            '  php console.php echo hello async world',
            '',
            'Commands return promises — the loop stays free.',
        ]);
    }
}
