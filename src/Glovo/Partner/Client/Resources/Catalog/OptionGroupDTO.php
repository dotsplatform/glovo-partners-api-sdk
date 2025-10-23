<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

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

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'active' => $this->isActive(),
            'min' => $this->getMin(),
            'max' => $this->getMax(),
            'moreThanOnce' => $this->isMoreThanOnce(),
            'items' => array_map(
                fn($option) => is_array($option) ? $option : $option->toArray(),
                $this->getItems(),
            ),
        ];
    }

    public function getOptionsIds(): array
    {
        return array_map(
            fn (OptionDTO $option) => $option->getId(),
            $this->getItems(),
        );
    }

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
