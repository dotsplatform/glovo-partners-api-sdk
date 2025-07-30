<?php
/**
 * Description of Menu.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class Product extends DTO
{
    protected string $id;

    protected string $name;

    protected float $price;

    protected string $image_url;

    protected array $extra_image_urls;

    protected ?Restrictions $restrictions;

    protected string $description;

    protected array $attributes_groups;

    protected bool $available;

    protected array $cross_selling_options;

    protected array $dietary_labels;

    protected ?string $packaging;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    public function getExtraImageUrls(): array
    {
        return $this->extra_image_urls;
    }

    public function getRestrictions(): ?Restrictions
    {
        return $this->restrictions;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getAttributesGroups(): array
    {
        return $this->attributes_groups;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function getCrossSellingOptions(): array
    {
        return $this->cross_selling_options;
    }

    public function getDietaryLabels(): array
    {
        return $this->dietary_labels;
    }

    public function getPackaging(): ?string
    {
        return $this->packaging;
    }
}
