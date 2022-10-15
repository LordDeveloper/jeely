<?php

namespace Jeely;

use Psr\Container\ContainerInterface;

final class Container
{
    private static ContainerInterface $container;

    public function __construct()
    {
        self::$container ??= new \DI\Container();
    }

    public static function __callStatic($name, array $arguments = [])
    {
        return call_user_func_array([new self(), $name], $arguments);
    }

    public function __call($name, array $arguments = [])
    {
        return call_user_func_array([self::$container, $name], $arguments);
    }
}