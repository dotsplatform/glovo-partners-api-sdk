<?php
/**
 * Description of ModifyProductsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items\DTO;

use Dots\Data\DTO;

class ModifyProductsDTO extends DTO
{
    protected float $price;

    protected bool $available;

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
