<?php

namespace Jeely\Tools;


use Jeely\Contracts\PaginatorInterface;
use Jeely\TL\Types\InlineKeyboardButton;

class Paginator implements PaginatorInterface
{
    protected array $keyboard = [];
    protected array $keyboardBefore = [];
    protected array $keyboardAfter = [];

    protected string $firstPageLabel = '« %s';
    protected string $previousPageLabel = '‹ %s';
    protected string $nextPageLabel = '%s ›';
    protected string $lastPageLabel = '%s »';
    protected string $currentPageLabel = '·%s·';

    public function __construct(protected int $pageCount, protected int $currentPage = 1, protected string $pattern = '{page}')
    {
        if (empty($currentPage)) {
            $this->currentPage = 1;
        }

        if ($currentPage > $pageCount) {
            $this->currentPage = $pageCount;
        }

        if($pageCount <= 0) {
            $this->pageCount = 1;
        }
    }

    public static function format($text, $data): InlineKeyboardButton
    {
        return Button::inline($text, $data);
    }

    public function build(): array
    {
        $row = [];

        if ($this->pageCount === 1) {
            return [];
        }

        elseif ($this->pageCount <= 5) {
            foreach (range(1, $this->pageCount + 1) as $page) {
                $row[$page] = $page;
            }
        } else {
            $row = $this->buildForMultiPages();
        }

        $row[$this->currentPage] = sprintf($this->currentPageLabel, $this->currentPage);
        return $this->keyboard = $this->toButtonArray($row);
    }

    public function buildForMultiPages(): array
    {
        if ($this->currentPage <= 3) {
            return $this->buildStartRow();
        }
        elseif ($this->currentPage > $this->pageCount - 3) {
            return $this->buildFinishRow();
        } else {
            return $this->buildMiddleRow();
        }
    }

    public function buildStartRow(): array
    {
        $row = [];

        foreach (range(1, 4) as $page) {
            $row[$page] = $page;
        }

        $row[4] = sprintf($this->nextPageLabel, 4);
        $row[$this->pageCount] = sprintf($this->lastPageLabel, $this->pageCount);

        return $row;
    }

    public function buildFinishRow(): array
    {
        $row = [];

        $row[1] = sprintf($this->firstPageLabel, 1);
        $row[$this->pageCount - 3] = sprintf($this->previousPageLabel, $this->pageCount - 3);

        foreach (range($this->pageCount - 2, $this->pageCount + 1) as $page) {
            $row[$page] = $page;
        }

        return $row;
    }

    public function buildMiddleRow(): array
    {
        $row = [];

        $row[1] = sprintf($this->firstPageLabel, 1);
        $row[$this->currentPage - 1] = sprintf($this->previousPageLabel, $this->currentPage - 1);
        $row[$this->currentPage] = $this->currentPage;
        $row[$this->currentPage + 1] = sprintf($this->nextPageLabel, $this->currentPage + 1);
        $row[$this->pageCount] = sprintf($this->lastPageLabel, $this->pageCount);

        return $row;
    }

    public function toButtonArray($row): array
    {
        $keyboard = [];

        ksort($row);

        foreach ($row as $idx => $column) {
            $keyboard[] = self::format(
                $column, $idx == $this->currentPage ? 'nil' : strtr(
                    $this->pattern, [
                        '{page}' => $idx
                    ]
                )
            );
        }

        return $keyboard;
    }

    public function keyboard(): array
    {
        return $this->keyboard ?: $this->build();
    }

    public function markup(): bool|array
    {
        $keyboards = [... $this->keyboardBefore];
        $keyboards[] = $this->keyboard();
        $keyboards = [... $keyboards, ... $this->keyboardAfter];

        $keyboards = array_values(array_filter($keyboards));

        return $keyboards ?: false;
    }

    public function addBefore(... $columns)
    {
        $this->keyboardBefore[] = $columns;
    }

    public function addAfter(...$columns)
    {
        $this->keyboardAfter[] = $columns;
    }

    public function __invoke(): bool|array
    {
        return $this->markup();
    }
}