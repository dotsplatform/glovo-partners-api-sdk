<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, ProductDTO>
 */
class ProductDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (ProductDTO|array $item): ProductDTO => $item instanceof ProductDTO ? $item : ProductDTO::fromArray($item),
            $data
        );
        return self::make($data);
    }
}

