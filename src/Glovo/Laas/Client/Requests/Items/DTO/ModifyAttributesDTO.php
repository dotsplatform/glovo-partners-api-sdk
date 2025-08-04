<?php
/**
 * Description of ModifyAttributesDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items\DTO;

use Dots\Data\DTO;

class ModifyAttributesDTO extends DTO
{
    protected float $price_impact;

    protected bool $available;

    public function getPriceImpact(): float
    {
        return $this->price_impact;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
