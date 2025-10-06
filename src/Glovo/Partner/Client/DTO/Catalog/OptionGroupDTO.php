<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Dots\Data\DTO;

class OptionGroupDTO extends DTO
{
    protected string $id;
    protected string $title;
    protected bool $active;
    protected float $min;
    protected float $max;
    protected bool $moreThanOnce;

    /** @var OptionDTO[] */
    protected array $items = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getMin(): float|int
    {
        return $this->min;
    }

    public function getMax(): float|int
    {
        return $this->max;
    }

    public function isMoreThanOnce(): bool
    {
        return $this->moreThanOnce;
    }

    /**
     * @return OptionDTO[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
