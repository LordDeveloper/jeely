<?php

namespace Jeely\Update;

use IteratorAggregate;
use Traversable;

/**
 * Minimal native JSON hydrator tailored for this project's TL runtime.
 *
 * Native JSON-to-object hydrator for Jeely TL models.
 *
 * Feature set:
 * - JSON_PROPERTY_MAP based casting (primitives + nested objects + arrays)
 * - magic get/set/unset and getX/setX/unsetX method access
 * - IteratorAggregate for Nectar context recursion (withTelegram / share)
 */
class NectarHydrator implements IteratorAggregate
{
    /**
     * Raw JSON payload as associative array.
     *
     * @var array<string, mixed>
     */
    protected array $raw = [];

    /**
     * Cached mapped values per JSON key.
     *
     * @var array<string, mixed>
     */
    private array $mapped = [];

    /**
     * @var array<string, array<string, string>>
     */
    private static array $propertyMapCache = [];

    public function __construct(mixed $data = [])
    {
        if ($data instanceof \stdClass) {
            $data = \get_object_vars($data);
        }

        if (! is_array($data)) {
            $data = [];
        }

        $this->raw = $data;
    }

    /**
     * Merge JSON_PROPERTY_MAP from parent classes → child (child keys override).
     * An empty child map therefore inherits the parent mappings instead of wiping them.
     *
     * @return array<string, string>
     */
    private function propertyMap(): array
    {
        $class = static::class;

        if (isset(self::$propertyMapCache[$class])) {
            return self::$propertyMapCache[$class];
        }

        $map = [];
        $chain = class_parents($class);
        if ($chain === false) {
            $chain = [];
        }
        $chain = array_reverse($chain);
        $chain[] = $class;

        foreach ($chain as $ancestor) {
            $fqConst = $ancestor . '::JSON_PROPERTY_MAP';
            if (! defined($fqConst)) {
                continue;
            }

            /** @var mixed $declared */
            $declared = constant($fqConst);
            if (! is_array($declared)) {
                continue;
            }

            /** @var array<string, string> $declared */
            $map = array_replace($map, $declared);
        }

        return self::$propertyMapCache[$class] = $map;
    }

    public function __get(string $name): mixed
    {
        if (array_key_exists($name, $this->mapped)) {
            return $this->mapped[$name];
        }

        $map = $this->propertyMap();

        if (! array_key_exists($name, $map)) {
            // Not part of the TL json map: return raw value if exists.
            return $this->raw[$name] ?? null;
        }

        if (! array_key_exists($name, $this->raw)) {
            // For array-typed properties we prefer empty array over null.
            if (str_ends_with($map[$name], '[]')) {
                return [];
            }

            return null;
        }

        return $this->mapped[$name] = $this->mapValue($name, $this->raw[$name], $map[$name]);
    }

    public function __set(string $name, mixed $value): void
    {
        $this->raw[$name] = $value;
        unset($this->mapped[$name]);
    }

    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->raw) && $this->{$name} !== null;
    }

    public function __unset(string $name): void
    {
        unset($this->raw[$name], $this->mapped[$name]);
    }

    public function __call(string $name, array $arguments): mixed
    {
        if (! str_starts_with($name, 'get') && ! str_starts_with($name, 'set') && ! str_starts_with($name, 'unset')) {
            throw new \BadMethodCallException('Undefined method ' . $name . '()');
        }

        if (str_starts_with($name, 'get')) {
            $key = $this->studlyToSnake(substr($name, 3));
            return $this->__get($key);
        }

        if (str_starts_with($name, 'unset')) {
            $key = $this->studlyToSnake(substr($name, 5));
            $this->__unset($key);
            return null;
        }

        // setX(...)
        $key = $this->studlyToSnake(substr($name, 3));
        $this->__set($key, $arguments[0] ?? null);
        return $this;
    }

    public function getIterator(): Traversable
    {
        foreach ($this->raw as $key => $_value) {
            yield $this->__get((string) $key);
        }
    }

    /**
     * Export hydrated data as a nested array suitable for Bot API payloads.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this->raw as $key => $_value) {
            $value = $this->__get((string) $key);
            $result[$key] = $this->exportValue($value);
        }

        return $result;
    }

    private function exportValue(mixed $value): mixed
    {
        if ($value instanceof self) {
            return $value->toArray();
        }

        if (is_array($value)) {
            return array_map(fn ($item) => $this->exportValue($item), $value);
        }

        return $value;
    }

    /**
     * @param mixed $value
     */
    private function mapValue(string $key, mixed $value, string $type): mixed
    {
        $type = trim($type);

        // array types e.g. 'User[]', 'int[]', 'MessageEntity[]', 'InlineKeyboardButton[][]'
        if (str_ends_with($type, '[]')) {
            $elementType = substr($type, 0, -2);

            if (! is_array($value)) {
                return [];
            }

            return array_map(
                fn ($v) => str_ends_with($elementType, '[]')
                    ? $this->mapValue($key, $v, $elementType)
                    : $this->castToType($v, $elementType),
                $value
            );
        }

        return $this->castToType($value, $type);
    }

    private function castToType(mixed $value, string $type): mixed
    {
        $type = trim($type);

        $primitives = [
            'bool',
            'boolean',
            'int',
            'integer',
            'float',
            'double',
            'string',
            'array',
            'object',
            'null',
        ];

        if (in_array($type, $primitives, true)) {
            return $this->castPrimitive($value, $type);
        }

        if ($value === null) {
            return null;
        }

        $targetClass = $this->resolveTypeToClass($type);
        if ($targetClass === null || ! class_exists($targetClass)) {
            // Unknown class: keep as-is.
            return $value;
        }

        if ($value instanceof $targetClass) {
            return $value;
        }

        if ($value instanceof self) {
            return new $targetClass($value->toArray());
        }

        return new $targetClass($value);
    }

    private function castPrimitive(mixed $value, string $type): mixed
    {
        return match ($type) {
            'null' => null,
            'bool', 'boolean' => (bool) $value,
            'int', 'integer' => (int) $value,
            'float', 'double' => (float) $value,
            'string' => (string) $value,
            'array' => is_array($value) ? $value : [],
            'object' => is_object($value) ? $value : (is_array($value) ? (object) $value : (object) []),
            default => $value,
        };
    }

    /**
     * Resolve relative TL type names into actual PHP classes.
     *
     * Examples:
     * - 'Types\\Message' => Jeely\\Api\\Types\\Message
     * - 'MessageEntity' (inside Jeely\\Api\\Types namespace) => Jeely\\Api\\Types\\MessageEntity
     */
    private function resolveTypeToClass(string $type): ?string
    {
        if ($type === '') {
            return null;
        }

        if (str_starts_with($type, '\\')) {
            return ltrim($type, '\\');
        }

        $currentNamespace = $this->currentClassNamespace();

        // 'Types\\X' should be resolved relative to the TL root namespace.
        if (str_starts_with($type, 'Types\\')) {
            $base = $currentNamespace;
            if (str_ends_with($base, '\\Types')) {
                $base = substr($base, 0, -strlen('\\Types'));
            }

            return $base . '\\' . $type;
        }

        // Otherwise resolve directly under the current namespace.
        return $currentNamespace . '\\' . $type;
    }

    private function currentClassNamespace(): string
    {
        $parts = explode('\\', static::class);
        array_pop($parts); // class short name
        return implode('\\', $parts);
    }

    private function studlyToSnake(string $input): string
    {
        $input = preg_replace('/(?<!^)[A-Z]/', '_$0', $input) ?? $input;
        return strtolower($input);
    }
}

