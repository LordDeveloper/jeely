<?php

namespace Jeely\Container;

use ReflectionClass;
use ReflectionNamedType;

/**
 * Minimal IoC container with bind, singleton, and constructor injection.
 */
final class Container
{
    /** @var array<string, callable(): mixed> */
    private array $bindings = [];

    /** @var array<string, mixed> */
    private array $instances = [];

    /** @var array<string, true> */
    private array $singletons = [];

    public function instance(string $abstract, mixed $instance): self
    {
        $this->instances[$abstract] = $instance;

        return $this;
    }

    public function bind(string $abstract, callable|string $concrete): self
    {
        unset($this->instances[$abstract], $this->singletons[$abstract]);
        $this->bindings[$abstract] = $this->wrapConcrete($concrete);

        return $this;
    }

    public function singleton(string $abstract, callable|string $concrete): self
    {
        $this->singletons[$abstract] = true;
        $this->bindings[$abstract] = $this->wrapConcrete($concrete);

        return $this;
    }

    public function has(string $abstract): bool
    {
        return array_key_exists($abstract, $this->instances)
            || array_key_exists($abstract, $this->bindings);
    }

    public function get(string $abstract): mixed
    {
        if (array_key_exists($abstract, $this->instances)) {
            return $this->instances[$abstract];
        }

        if (! array_key_exists($abstract, $this->bindings)) {
            if (class_exists($abstract) || interface_exists($abstract)) {
                return $this->make($abstract);
            }

            throw new ContainerException('No binding found for: ' . $abstract);
        }

        $value = ($this->bindings[$abstract])();

        if (isset($this->singletons[$abstract])) {
            $this->instances[$abstract] = $value;
        }

        return $value;
    }

    public function make(string $class): object
    {
        if (array_key_exists($class, $this->instances)) {
            $resolved = $this->instances[$class];

            return $resolved instanceof object ? $resolved : throw new ContainerException('Cached value is not an object: ' . $class);
        }

        if (array_key_exists($class, $this->bindings)) {
            $value = $this->get($class);

            return $value instanceof object ? $value : throw new ContainerException('Binding did not resolve to an object: ' . $class);
        }

        $ref = new ReflectionClass($class);

        if (! $ref->isInstantiable()) {
            throw new ContainerException('Class is not instantiable: ' . $class);
        }

        $ctor = $ref->getConstructor();
        if ($ctor === null) {
            return $ref->newInstance();
        }

        $args = [];
        foreach ($ctor->getParameters() as $parameter) {
            $args[] = $this->resolveParameter($parameter);
        }

        return $ref->newInstanceArgs($args);
    }

    /**
     * @return callable(): mixed
     */
    private function wrapConcrete(callable|string $concrete): callable
    {
        if (is_string($concrete)) {
            return fn () => $this->make($concrete);
        }

        return $concrete;
    }

    private function resolveParameter(\ReflectionParameter $parameter): mixed
    {
        $type = $parameter->getType();

        if ($type instanceof ReflectionNamedType && ! $type->isBuiltin()) {
            return $this->get($type->getName());
        }

        if ($parameter->isDefaultValueAvailable()) {
            return $parameter->getDefaultValue();
        }

        throw new ContainerException('Unable to resolve parameter $' . $parameter->getName());
    }
}
