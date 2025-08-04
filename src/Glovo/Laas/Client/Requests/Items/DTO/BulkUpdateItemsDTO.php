<?php
/**
 * Description of BulkUpdateItemsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Catalog\Attributes;
use Dots\Glovo\Laas\Client\Resources\Catalog\Products;

class BulkUpdateItemsDTO extends DTO
{
    protected Products $products;

    protected Attributes $attributes;

    public function getProducts(): Products
    {
        return $this->products;
    }

    public function getAttributes(): Attributes
    {
        return $this->attributes;
    }
}
