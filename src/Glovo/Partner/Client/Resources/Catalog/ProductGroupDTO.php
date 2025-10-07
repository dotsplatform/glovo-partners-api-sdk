<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class ProductGroupDTO extends DTO
{
    protected string $id;

    protected string $title;

    protected bool $active;

    protected int $position;

    /** @var ProductDTO[] */
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

    public function getPosition(): float|int
    {
        return $this->position;
    }

    /**
     * @return ProductDTO[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
