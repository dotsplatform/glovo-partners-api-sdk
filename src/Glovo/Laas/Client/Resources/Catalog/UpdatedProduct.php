<?php
/**
 * Description of UpdatedProduct.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class UpdatedProduct extends DTO
{
    protected string $id;

    protected string $name;

    protected float $price;

    protected string $image_url;

    protected bool $available;

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

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
