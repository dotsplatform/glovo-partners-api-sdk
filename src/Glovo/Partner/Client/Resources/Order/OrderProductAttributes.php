<?php

use Dots\Glovo\Partner\Client\Resources\Order\OrderProductAttribute;

/**
 * Description of OrderProductAttribute.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OrderProductAttribute>
 */
class OrderProductAttributes extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => OrderProductAttribute::fromArray($item),
                $data
            )
        );
    }
}
