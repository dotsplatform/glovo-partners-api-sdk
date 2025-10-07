<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class BulkUpdateProductDTO extends DTO
{
    protected string $id;

    protected string $title;

    protected float $price;

    protected bool $active;

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
