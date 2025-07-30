<?php
/**
 * Description of CrossSellingOption.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class CrossSellingOption extends DTO
{
    protected string $name;

    protected array $products;

    public function getName(): string
    {
        return $this->name;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
