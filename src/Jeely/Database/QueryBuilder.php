<?php

namespace Jeely\Database;

/**
 * Fluent SQL query builder.
 */
final class QueryBuilder
{
    private ?string $table = null;

    /** @var list<string> */
    private array $columns = ['*'];

    /** @var list<array{0:string,1:array}> */
    private array $wheres = [];

    /** @var list<string> */
    private array $orders = [];

    private ?int $limit = null;

    private ?int $offset = null;

    public function __construct(private Connection $connection)
    {
    }

    public function table(string $table): self
    {
        $this->table = $table;

        return $this;
    }

    public function from(string $table): self
    {
        return $this->table($table);
    }

    /**
     * @param  string|list<string>  $columns
     */
    public function select(string|array $columns = ['*']): self
    {
        $this->columns = is_array($columns) ? array_values($columns) : [$columns];

        return $this;
    }

    public function where(string $column, mixed $operator, mixed $value = null): self
    {
        if (func_num_args() === 2) {
            $value = $operator;
            $operator = '=';
        }

        $operator = strtoupper((string) $operator);
        $this->wheres[] = ["{$this->wrap($column)} {$operator} ?", [$value]];

        return $this;
    }

    public function whereIn(string $column, array $values): self
    {
        if ($values === []) {
            $this->wheres[] = ['0 = 1', []];

            return $this;
        }

        $placeholders = implode(', ', array_fill(0, count($values), '?'));
        $this->wheres[] = ["{$this->wrap($column)} IN ({$placeholders})", array_values($values)];

        return $this;
    }

    public function whereNull(string $column): self
    {
        $this->wheres[] = ["{$this->wrap($column)} IS NULL", []];

        return $this;
    }

    public function orderBy(string $column, string $direction = 'asc'): self
    {
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $this->orders[] = $this->wrap($column) . ' ' . $direction;

        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = max(0, $limit);

        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = max(0, $offset);

        return $this;
    }

    public function get(): array
    {
        [$sql, $bindings] = $this->toSelectSql();

        return $this->connection->select($sql, $bindings);
    }

    public function first(): ?array
    {
        $this->limit(1);
        [$sql, $bindings] = $this->toSelectSql();

        return $this->connection->selectOne($sql, $bindings);
    }

    public function value(string $column): mixed
    {
        $row = $this->select([$column])->first();

        return $row[$column] ?? null;
    }

    public function count(string $column = '*'): int
    {
        $previous = $this->columns;
        $this->columns = ["COUNT({$column}) AS aggregate"];
        $row = $this->first();
        $this->columns = $previous;

        return (int) ($row['aggregate'] ?? 0);
    }

    public function exists(): bool
    {
        return $this->count() > 0;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function insert(array $values): bool
    {
        $this->assertTable();

        if ($values === []) {
            return false;
        }

        $columns = array_keys($values);
        $placeholders = implode(', ', array_fill(0, count($columns), '?'));
        $wrapped = implode(', ', array_map(fn ($c) => $this->wrap($c), $columns));

        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $this->wrap($this->table), $wrapped, $placeholders);
        $this->connection->execute($sql, array_values($values));

        return true;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function update(array $values): int
    {
        $this->assertTable();

        if ($values === []) {
            return 0;
        }

        $sets = [];
        $bindings = [];
        foreach ($values as $column => $value) {
            $sets[] = $this->wrap($column) . ' = ?';
            $bindings[] = $value;
        }

        [$whereSql, $whereBindings] = $this->compileWheres();
        $sql = sprintf('UPDATE %s SET %s%s', $this->wrap($this->table), implode(', ', $sets), $whereSql);

        return $this->connection->execute($sql, array_merge($bindings, $whereBindings));
    }

    public function delete(): int
    {
        $this->assertTable();
        [$whereSql, $whereBindings] = $this->compileWheres();
        $sql = sprintf('DELETE FROM %s%s', $this->wrap($this->table), $whereSql);

        return $this->connection->execute($sql, $whereBindings);
    }

    /**
     * @return array{0:string,1:list<mixed>}
     */
    private function toSelectSql(): array
    {
        $this->assertTable();

        $sql = sprintf(
            'SELECT %s FROM %s',
            implode(', ', $this->columns),
            $this->wrap($this->table)
        );

        [$whereSql, $bindings] = $this->compileWheres();
        $sql .= $whereSql;

        if ($this->orders !== []) {
            $sql .= ' ORDER BY ' . implode(', ', $this->orders);
        }

        if ($this->limit !== null) {
            $sql .= ' LIMIT ' . $this->limit;
        }

        if ($this->offset !== null) {
            $sql .= ' OFFSET ' . $this->offset;
        }

        return [$sql, $bindings];
    }

    /**
     * @return array{0:string,1:list<mixed>}
     */
    private function compileWheres(): array
    {
        if ($this->wheres === []) {
            return ['', []];
        }

        $parts = [];
        $bindings = [];
        foreach ($this->wheres as [$sql, $binds]) {
            $parts[] = $sql;
            foreach ($binds as $bind) {
                $bindings[] = $bind;
            }
        }

        return [' WHERE ' . implode(' AND ', $parts), $bindings];
    }

    private function wrap(string $value): string
    {
        if ($value === '*') {
            return '*';
        }

        return '"' . str_replace('"', '""', $value) . '"';
    }

    private function assertTable(): void
    {
        if ($this->table === null || $this->table === '') {
            throw new \LogicException('No table selected for query.');
        }
    }
}
