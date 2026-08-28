<?php

namespace Jeely\Database;

/**
 * Table blueprint for Schema::create().
 */
final class Blueprint
{
    /** @var list<string> */
    private array $columns = [];

    public function __construct(private string $table)
    {
    }

    public function id(string $name = 'id'): self
    {
        $this->columns[] = sprintf('"%s" INTEGER PRIMARY KEY AUTOINCREMENT', $this->escape($name));

        return $this;
    }

    public function string(string $name, int $length = 255, bool $nullable = false): self
    {
        $null = $nullable ? 'NULL' : 'NOT NULL';
        $this->columns[] = sprintf('"%s" VARCHAR(%d) %s', $this->escape($name), $length, $null);

        return $this;
    }

    public function text(string $name, bool $nullable = false): self
    {
        $null = $nullable ? 'NULL' : 'NOT NULL';
        $this->columns[] = sprintf('"%s" TEXT %s', $this->escape($name), $null);

        return $this;
    }

    public function integer(string $name, bool $nullable = false): self
    {
        $null = $nullable ? 'NULL' : 'NOT NULL';
        $this->columns[] = sprintf('"%s" INTEGER %s', $this->escape($name), $null);

        return $this;
    }

    public function boolean(string $name, bool $nullable = false): self
    {
        $null = $nullable ? 'NULL' : 'NOT NULL';
        $this->columns[] = sprintf('"%s" INTEGER %s', $this->escape($name), $null);

        return $this;
    }

    public function float(string $name, bool $nullable = false): self
    {
        $null = $nullable ? 'NULL' : 'NOT NULL';
        $this->columns[] = sprintf('"%s" REAL %s', $this->escape($name), $null);

        return $this;
    }

    public function timestamps(): self
    {
        $this->columns[] = '"created_at" TEXT NULL';
        $this->columns[] = '"updated_at" TEXT NULL';

        return $this;
    }

    public function unique(string $name): self
    {
        // Convert last matching column definition roughly — for simplicity append UNIQUE constraint.
        $this->columns[] = sprintf('UNIQUE("%s")', $this->escape($name));

        return $this;
    }

    public function toSql(): string
    {
        if ($this->columns === []) {
            throw new \LogicException('Blueprint has no columns.');
        }

        return sprintf(
            'CREATE TABLE IF NOT EXISTS "%s" (%s)',
            $this->escape($this->table),
            implode(', ', $this->columns)
        );
    }

    private function escape(string $value): string
    {
        return str_replace('"', '""', $value);
    }
}
