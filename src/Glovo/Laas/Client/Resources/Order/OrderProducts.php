<?php
/**
 * Description of OrderProducts.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OrderProduct>
 */
class OrderProducts extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => OrderProduct::fromArray($item),
                $data
            )
        );
    }
}
