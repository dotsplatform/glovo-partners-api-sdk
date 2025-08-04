<?php
/**
 * Description of UpdatedAttribute.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class UpdatedAttribute extends DTO
{
    protected string $id;

    protected string $name;

    protected float $price_impact;

    protected bool $available;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceImpact(): float
    {
        return $this->price_impact;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
