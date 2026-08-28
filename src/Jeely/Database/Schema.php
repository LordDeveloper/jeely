<?php

namespace Jeely\Database;

/**
 * Minimal schema helper for creating/dropping tables.
 */
final class Schema
{
    public function __construct(private Connection $connection)
    {
    }

    /**
     * @param  callable(Blueprint):void  $callback
     */
    public function create(string $table, callable $callback): void
    {
        $blueprint = new Blueprint($table);
        $callback($blueprint);
        $this->connection->execute($blueprint->toSql());
    }

    public function drop(string $table): void
    {
        $this->connection->execute(sprintf('DROP TABLE IF EXISTS "%s"', str_replace('"', '""', $table)));
    }

    public function hasTable(string $table): bool
    {
        $row = $this->connection->selectOne(
            'SELECT name FROM sqlite_master WHERE type = ? AND name = ?',
            ['table', $table]
        );

        return $row !== null;
    }
}
