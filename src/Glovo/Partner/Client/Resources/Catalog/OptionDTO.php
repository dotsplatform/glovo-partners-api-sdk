<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class OptionDTO extends DTO
{
    protected string $id;

    protected string $title;

    protected bool $active;

    protected float $price;

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

    public function getPrice(): float
    {
        return $this->price;
    }
}
