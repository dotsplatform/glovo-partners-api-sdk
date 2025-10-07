<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, CollectionDTO>
 */
class CollectionDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (CollectionDTO|array $item): CollectionDTO => $item instanceof CollectionDTO ? $item : CollectionDTO::fromArray($item),
            $data
        );

        return self::make($data);
    }
}
