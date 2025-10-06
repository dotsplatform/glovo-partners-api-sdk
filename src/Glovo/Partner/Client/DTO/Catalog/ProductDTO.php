<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Dots\Data\DTO;
use Dots\Glovo\Partner\Client\Resources\Catalog\Restrictions;

class ProductDTO extends DTO
{
    protected string $id;

    protected string $title;

    protected bool $active;

    protected string $description;

    protected float $price;

    protected Restrictions $restrictions;

    protected string $image;

    protected int $position;

    protected string $external_id;

    /** @var string[] */
    protected array $options = [];

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getRestrictions(): Restrictions
    {
        return $this->restrictions;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getPosition(): float|int
    {
        return $this->position;
    }

    public function getExternalId(): string
    {
        return $this->external_id;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
