<?php

namespace Jeely\Database;

/**
 * Lightweight Active Record style model.
 */
abstract class Model
{
    protected static ?string $table = null;

    protected static string $primaryKey = 'id';

    /** @var list<string> */
    protected static array $fillable = [];

    /** @var array<string, string> */
    protected static array $casts = [];

    protected static bool $timestamps = true;

    /** @var array<string, mixed> */
    protected array $attributes = [];

    /** @var array<string, mixed> */
    protected array $original = [];

    protected bool $exists = false;

    private static ?Connection $connection = null;

    public function __construct(array $attributes = [], bool $exists = false)
    {
        $this->fill($attributes);
        $this->exists = $exists;
        $this->syncOriginal();
    }

    public static function setConnection(Connection $connection): void
    {
        self::$connection = $connection;
        Connection::setDefault($connection);
    }

    public static function connection(): Connection
    {
        return self::$connection ?? Connection::default();
    }

    public static function query(): ModelQuery
    {
        return new ModelQuery(
            static::connection()->query()->table(static::table()),
            static::class
        );
    }

    public static function table(): string
    {
        if (static::$table !== null && static::$table !== '') {
            return static::$table;
        }

        $short = substr(strrchr(static::class, '\\') ?: static::class, 1);

        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $short) ?? $short) . 's';
    }

    public static function find(int|string $id): ?static
    {
        /** @var static|null $model */
        $model = static::query()->where(static::$primaryKey, $id)->first();

        return $model;
    }

    /**
     * @return list<static>
     */
    public static function all(): array
    {
        /** @var list<static> $models */
        $models = static::query()->get();

        return $models;
    }

    public static function where(string $column, mixed $operator, mixed $value = null): ModelQuery
    {
        $query = static::query();

        return func_num_args() === 2
            ? $query->where($column, $operator)
            : $query->where($column, $operator, $value);
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    public static function create(array $attributes): static
    {
        $model = new static($attributes);
        $model->save();

        return $model;
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    public function fill(array $attributes): static
    {
        foreach ($attributes as $key => $value) {
            if (static::$fillable !== [] && ! in_array($key, static::$fillable, true) && $key !== static::$primaryKey && ! $this->isTimestampColumn($key)) {
                continue;
            }

            $this->attributes[$key] = $value;
        }

        return $this;
    }

    public function save(): bool
    {
        $now = date('Y-m-d H:i:s');

        if (static::$timestamps) {
            if (! $this->exists && ! isset($this->attributes['created_at'])) {
                $this->attributes['created_at'] = $now;
            }
            $this->attributes['updated_at'] = $now;
        }

        $data = $this->attributesForStorage();

        if ($this->exists) {
            $id = $this->attributes[static::$primaryKey] ?? null;
            if ($id === null) {
                throw new \RuntimeException('Cannot update model without primary key.');
            }

            unset($data[static::$primaryKey]);
            static::connection()->query()->table(static::table())->where(static::$primaryKey, $id)->update($data);
        } else {
            unset($data[static::$primaryKey]);
            static::connection()->query()->table(static::table())->insert($data);
            $this->attributes[static::$primaryKey] = static::connection()->lastInsertId();
            $this->exists = true;
        }

        $this->syncOriginal();

        return true;
    }

    public function delete(): bool
    {
        if (! $this->exists) {
            return false;
        }

        $id = $this->attributes[static::$primaryKey] ?? null;
        if ($id === null) {
            return false;
        }

        static::connection()->query()->table(static::table())->where(static::$primaryKey, $id)->delete();
        $this->exists = false;

        return true;
    }

    public function toArray(): array
    {
        $out = [];
        foreach ($this->attributes as $key => $value) {
            $out[$key] = $this->castAttribute($key, $value);
        }

        return $out;
    }

    public function __get(string $key): mixed
    {
        return $this->castAttribute($key, $this->attributes[$key] ?? null);
    }

    public function __set(string $key, mixed $value): void
    {
        $this->attributes[$key] = $value;
    }

    public function __isset(string $key): bool
    {
        return isset($this->attributes[$key]);
    }

    /**
     * @param  array<string, mixed>  $row
     */
    public static function newFromBuilder(array $row): static
    {
        return new static($row, true);
    }

    /**
     * Hydrate many rows into model instances.
     *
     * @param  list<array<string, mixed>>  $rows
     * @return list<static>
     */
    public static function hydrate(array $rows): array
    {
        return array_map(fn (array $row) => static::newFromBuilder($row), $rows);
    }

    protected function syncOriginal(): void
    {
        $this->original = $this->attributes;
    }

    /**
     * @return array<string, mixed>
     */
    protected function attributesForStorage(): array
    {
        $data = [];
        foreach ($this->attributes as $key => $value) {
            if (static::$fillable !== [] && ! in_array($key, static::$fillable, true) && $key !== static::$primaryKey && ! $this->isTimestampColumn($key)) {
                continue;
            }

            $data[$key] = $this->prepareForStorage($key, $value);
        }

        return $data;
    }

    protected function prepareForStorage(string $key, mixed $value): mixed
    {
        $cast = static::$casts[$key] ?? null;

        return match ($cast) {
            'bool', 'boolean' => $value ? 1 : 0,
            'array', 'json' => is_string($value) ? $value : json_encode($value, JSON_UNESCAPED_UNICODE),
            default => $value,
        };
    }

    protected function castAttribute(string $key, mixed $value): mixed
    {
        if ($value === null) {
            return null;
        }

        $cast = static::$casts[$key] ?? null;

        return match ($cast) {
            'int', 'integer' => (int) $value,
            'float', 'double' => (float) $value,
            'bool', 'boolean' => (bool) $value,
            'string' => (string) $value,
            'array', 'json' => is_array($value) ? $value : (json_decode((string) $value, true) ?? []),
            default => $value,
        };
    }

    protected function isTimestampColumn(string $key): bool
    {
        return static::$timestamps && ($key === 'created_at' || $key === 'updated_at');
    }
}
