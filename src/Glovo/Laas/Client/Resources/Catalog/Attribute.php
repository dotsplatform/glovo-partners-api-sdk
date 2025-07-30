<?php
/**
 * Description of Menu.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class Attribute extends DTO
{
    protected string $id;

    protected string $name;

    protected float $priceImpact;

    protected bool $selectedByDefault;

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
        return $this->priceImpact;
    }

    public function isSelectedByDefault(): bool
    {
        return $this->selectedByDefault;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
