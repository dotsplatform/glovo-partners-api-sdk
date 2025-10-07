<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OptionGroupDTO>
 */
class OptionGroupDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (OptionGroupDTO|array $item): OptionGroupDTO => $item instanceof OptionGroupDTO ? $item : OptionGroupDTO::fromArray($item),
            $data
        );

        return self::make($data);
    }
}
