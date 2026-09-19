<?php

namespace Jeely\Update;

use Closure;
use Jeely\Api\Update;

/**
 * Onion middleware pipeline around an update handler.
 */
final class MiddlewarePipeline
{
    /** @var array<int, callable(Update, callable(Update): mixed): mixed> */
    private array $middleware = [];

    /**
     * @param  iterable<callable(Update, callable(Update): mixed): mixed>  $middleware
     */
    public function __construct(iterable $middleware = [])
    {
        foreach ($middleware as $layer) {
            $this->push($layer);
        }
    }

    /**
     * @param  callable(Update, callable(Update): mixed): mixed  $middleware
     */
    public function push(callable $middleware): self
    {
        $this->middleware[] = $middleware;

        return $this;
    }

    /**
     * @param  callable(Update): mixed  $destination
     */
    public function process(Update $update, callable $destination): mixed
    {
        $next = Closure::fromCallable($destination);

        foreach (array_reverse($this->middleware) as $middleware) {
            $previous = $next;
            $next = static function (Update $current) use ($middleware, $previous): mixed {
                return $middleware($current, $previous);
            };
        }

        return $next($update);
    }
}
