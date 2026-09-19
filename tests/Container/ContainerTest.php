<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Container\Container;
use Jeely\Container\ContainerException;

final class TestClock
{
}

final class TestGreeter
{
    public function __construct(public TestClock $clock)
    {
    }
}

return [
    'container_resolves_singleton_once' => function (): void {
        $container = new Container();
        $count = 0;

        $container->singleton('counter', static function () use (&$count) {
            $count++;

            return (object) ['n' => $count];
        });

        $first = $container->get('counter');
        $second = $container->get('counter');

        assertSame(1, $count);
        assertSame($first, $second);
    },

    'container_make_uses_constructor_injection' => function (): void {
        $container = new Container();
        $clock = new TestClock();
        $container->instance(TestClock::class, $clock);

        $service = $container->make(TestGreeter::class);

        assertInstanceOf(TestGreeter::class, $service);
        assertSame($clock, $service->clock);
    },

    'container_unknown_property_throws' => function (): void {
        $container = new Container();

        try {
            $container->get('missing');
            assertFalse(true, 'expected ContainerException');
        } catch (ContainerException) {
            assertTrue(true);
        }
    },
];
