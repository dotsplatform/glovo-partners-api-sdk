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

    protected float $price_impact;

    protected bool $selected_by_default;

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

    public function isSelectedByDefault(): bool
    {
        return $this->selected_by_default;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
