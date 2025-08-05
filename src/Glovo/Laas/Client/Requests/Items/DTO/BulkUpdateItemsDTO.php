<?php
/**
 * Description of BulkUpdateItemsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Catalog\UpdatedAttributes;
use Dots\Glovo\Laas\Client\Resources\Catalog\UpdatedProducts;

class BulkUpdateItemsDTO extends DTO
{
    protected UpdatedProducts $products;

    protected UpdatedAttributes $attributes;

    public function getProducts(): UpdatedProducts
    {
        return $this->products;
    }

    public function getAttributes(): UpdatedAttributes
    {
        return $this->attributes;
    }

}
