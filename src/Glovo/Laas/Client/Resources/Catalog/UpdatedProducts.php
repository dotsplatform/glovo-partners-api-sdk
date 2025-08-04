<?php
/**
 * Description of UpdatedProducts.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, UpdatedProduct>
 */
class UpdatedProducts extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => UpdatedProduct::fromArray($item),
                $data
            )
        );
    }
}
