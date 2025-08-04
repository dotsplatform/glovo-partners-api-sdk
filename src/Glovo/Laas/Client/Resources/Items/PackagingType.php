<?php
/**
 * Description of PackagingType.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Items;

use Dots\Data\DTO;

class PackagingType extends DTO
{
    protected int $id;

    protected string $type_name;

    protected bool $is_eco;

    protected bool $is_returnable;

    protected float $min_price;

    protected float $max_price;

    protected string $currency;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTypeName(): string
    {
        return $this->type_name;
    }

    public function isIsEco(): bool
    {
        return $this->is_eco;
    }

    public function isIsReturnable(): bool
    {
        return $this->is_returnable;
    }

    public function getMinPrice(): float
    {
        return $this->min_price;
    }

    public function getMaxPrice(): float
    {
        return $this->max_price;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}
