<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, SuperCollectionDTO>
 */
class SuperCollectionDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (SuperCollectionDTO|array $item): SuperCollectionDTO => $item instanceof SuperCollectionDTO ? $item : SuperCollectionDTO::fromArray($item),
            $data
        );
        return self::make($data);
    }
}

