<?php
/**
 * Description of ModifyProductsResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses\Items;

use Dots\Glovo\Laas\Client\Responses\GlovoResponseDTO;

class ModifyProductsResponseDTO extends GlovoResponseDTO
{
    protected string $id;

    protected string $name;

    protected string $price;

    protected string $image_url;

    protected string $description;

    protected bool $available;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
