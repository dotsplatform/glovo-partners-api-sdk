<?php
/**
 * Description of BulkUpdateItemsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Items\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Partner\Client\Resources\Catalog\UpdatedAttributes;
use Dots\Glovo\Partner\Client\Resources\Catalog\UpdatedProducts;

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
