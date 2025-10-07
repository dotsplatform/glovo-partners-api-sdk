<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, BulkUpdateProductDTO>
 */
class BulkUpdateProductDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (BulkUpdateProductDTO|array $item): BulkUpdateProductDTO => $item instanceof BulkUpdateProductDTO ? $item : BulkUpdateProductDTO::fromArray($item),
            $data
        );

        return self::make($data);
    }
}
