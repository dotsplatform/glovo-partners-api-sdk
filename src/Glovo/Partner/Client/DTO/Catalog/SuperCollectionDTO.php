<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Dots\Data\DTO;

class SuperCollectionDTO extends DTO
{
    protected string $id;

    protected string $title;

    protected bool $active;

    protected int $position;

    protected string $image;

    /** @var string[] */
    protected array $menuCollections = [];

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

    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string[]
     */
    public function getMenuCollections(): array
    {
        return $this->menuCollections;
    }
}
