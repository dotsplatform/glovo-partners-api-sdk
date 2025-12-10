<?php
/**
 * Description of OrderSubProducts.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OrderSubProduct>
 */
class OrderSubProducts extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => OrderSubProduct::fromArray($item),
                $data
            )
        );
    }
}
