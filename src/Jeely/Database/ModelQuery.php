<?php

namespace Jeely\Database;

/**
 * Query builder that hydrates Model instances.
 *
 * @template T of Model
 */
final class ModelQuery
{
    public function __construct(
        private QueryBuilder $query,
        /** @var class-string<T> */
        private string $modelClass,
    ) {
    }

    public function select(string|array $columns = ['*']): self
    {
        $this->query->select($columns);

        return $this;
    }

    public function where(string $column, mixed $operator, mixed $value = null): self
    {
        if (func_num_args() === 2) {
            $this->query->where($column, $operator);
        } else {
            $this->query->where($column, $operator, $value);
        }

        return $this;
    }

    public function whereIn(string $column, array $values): self
    {
        $this->query->whereIn($column, $values);

        return $this;
    }

    public function orderBy(string $column, string $direction = 'asc'): self
    {
        $this->query->orderBy($column, $direction);

        return $this;
    }

    public function limit(int $limit): self
    {
        $this->query->limit($limit);

        return $this;
    }

    public function offset(int $offset): self
    {
        $this->query->offset($offset);

        return $this;
    }

    /**
     * @return list<T>
     */
    public function get(): array
    {
        /** @var class-string<Model> $class */
        $class = $this->modelClass;

        return $class::hydrate($this->query->get());
    }

    /**
     * @return T|null
     */
    public function first(): ?Model
    {
        $row = $this->query->first();

        if ($row === null) {
            return null;
        }

        /** @var class-string<Model> $class */
        $class = $this->modelClass;

        return $class::newFromBuilder($row);
    }

    public function count(string $column = '*'): int
    {
        return $this->query->count($column);
    }

    public function exists(): bool
    {
        return $this->query->exists();
    }

    public function delete(): int
    {
        return $this->query->delete();
    }

    public function update(array $values): int
    {
        return $this->query->update($values);
    }
}
