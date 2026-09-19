<?php

declare(strict_types=1);

namespace Examples\Consolebot\Commands;

use Jeely\Api\Types\Error;
use Jeely\Console\Command;
use Jeely\Telegram;

final class InfoCommand extends Command
{
    public function name(): string
    {
        return 'info';
    }

    public function description(): string
    {
        return 'Show bot identity via Telegram getMe';
    }

    public function handle(): mixed
    {
        /** @var Telegram $telegram */
        $telegram = $this->container->get('telegram');

        return delay(0.01)->then(function () use ($telegram) {
            $me = $telegram->getMe(['async' => false]);

            if ($me instanceof Error) {
                $this->output->writeln('<error>getMe failed: ' . ($me->description ?? 'unknown') . '</error>');

                return 1;
            }

            $this->output->writeln('Bot info:');
            $this->output->writeln('  id:       ' . ($me->id ?? '?'));
            $this->output->writeln('  username: @' . ($me->username ?? '?'));
            $this->output->writeln('  name:     ' . trim(($me->first_name ?? '') . ' ' . ($me->last_name ?? '')));

            return 0;
        });
    }
}
