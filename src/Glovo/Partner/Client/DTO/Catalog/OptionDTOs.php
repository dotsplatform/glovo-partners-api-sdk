<?php

namespace Dots\Glovo\Partner\Client\DTO\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OptionDTO>
 */
class OptionDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (OptionDTO|array $item): OptionDTO => $item instanceof OptionDTO ? $item : OptionDTO::fromArray($item),
            $data
        );
        return self::make($data);
    }
}

