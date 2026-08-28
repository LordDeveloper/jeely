<?php

namespace Jeely\Database;

use PDO;
use PDOException;
use PDOStatement;

/**
 * Thin PDO connection wrapper (SQLite-first, MySQL/PG compatible).
 */
final class Connection
{
    private static ?self $default = null;

    public function __construct(private PDO $pdo)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public static function sqlite(string $path = ':memory:', array $options = []): self
    {
        if ($path !== ':memory:') {
            $dir = dirname($path);
            if ($dir !== '' && $dir !== '.' && ! is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
        }

        $pdo = new PDO('sqlite:' . $path, null, null, $options);
        $pdo->exec('PRAGMA foreign_keys = ON');

        return new self($pdo);
    }

    public static function dsn(string $dsn, ?string $user = null, ?string $password = null, array $options = []): self
    {
        return new self(new PDO($dsn, $user, $password, $options));
    }

    public static function setDefault(self $connection): void
    {
        self::$default = $connection;
    }

    public static function default(): self
    {
        if (self::$default === null) {
            throw new \RuntimeException('No default database connection. Call Connection::setDefault() first.');
        }

        return self::$default;
    }

    public function pdo(): PDO
    {
        return $this->pdo;
    }

    public function query(): QueryBuilder
    {
        return new QueryBuilder($this);
    }

    public function schema(): Schema
    {
        return new Schema($this);
    }

    /**
     * @param  array<int|string, mixed>  $bindings
     */
    public function select(string $sql, array $bindings = []): array
    {
        return $this->statement($sql, $bindings)->fetchAll();
    }

    /**
     * @param  array<int|string, mixed>  $bindings
     */
    public function selectOne(string $sql, array $bindings = []): ?array
    {
        $row = $this->statement($sql, $bindings)->fetch();

        return $row === false ? null : $row;
    }

    /**
     * @param  array<int|string, mixed>  $bindings
     */
    public function execute(string $sql, array $bindings = []): int
    {
        return $this->statement($sql, $bindings)->rowCount();
    }

    public function lastInsertId(?string $name = null): string
    {
        return (string) $this->pdo->lastInsertId($name);
    }

    /**
     * @template T
     * @param  callable(self):T  $callback
     * @return T
     */
    public function transaction(callable $callback): mixed
    {
        $this->pdo->beginTransaction();

        try {
            $result = $callback($this);
            $this->pdo->commit();

            return $result;
        } catch (\Throwable $e) {
            if ($this->pdo->inTransaction()) {
                $this->pdo->rollBack();
            }

            throw $e;
        }
    }

    /**
     * @param  array<int|string, mixed>  $bindings
     */
    public function statement(string $sql, array $bindings = []): PDOStatement
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            foreach (array_values($bindings) as $index => $value) {
                $stmt->bindValue($index + 1, $value, $this->pdoType($value));
            }
            $stmt->execute();

            return $stmt;
        } catch (PDOException $e) {
            throw new \RuntimeException('Database error: ' . $e->getMessage(), (int) $e->getCode(), $e);
        }
    }

    private function pdoType(mixed $value): int
    {
        return match (true) {
            is_bool($value) => PDO::PARAM_BOOL,
            is_int($value) => PDO::PARAM_INT,
            $value === null => PDO::PARAM_NULL,
            default => PDO::PARAM_STR,
        };
    }
}
