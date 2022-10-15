<?php

namespace Jeely;

use Jeely\TL\Update;
use function DI\value;

class Updater
{
    private Container $container;

    public function __construct(string $token, array $browserConfig = [])
    {
        $this->container = new Container();
        $this->container->set(\DI\Container::class, $this->container);
        $this->container->set('token', value($token));
        $this->container->set(Browser::class, new Browser($browserConfig));
    }

    public function waitWebhook(callable $callback)
    {
        return $callback($this->container->make(Update::class, [
            'objectData' => json_decode(file_get_contents('php://input'), true),
        ]));
    }

    public function waitPolling(callable $callback, array $options = [])
    {
        while (true) {
            $updates = $this->container->get(Telegram::class)->getUpdates($options);

            foreach ($updates as $update) {
                $this->container->call($callback, [
                    'update' => $update,
                ]);
            }
        }
    }
}
