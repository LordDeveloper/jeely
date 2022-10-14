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
        $this->container->set('token', value($token));
        $this->container->set(Browser::class, new Browser($browserConfig));
    }

    public function waitForUpdates($callback)
    {
        return $callback($this->container->get(Update::class));
    }
}
