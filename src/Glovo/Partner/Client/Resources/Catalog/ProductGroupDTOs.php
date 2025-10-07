<?php

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, ProductGroupDTO>
 */
class ProductGroupDTOs extends Collection
{
    public static function fromArray(array $data): self
    {
        $data = array_map(
            fn (ProductGroupDTO|array $item): ProductGroupDTO => $item instanceof ProductGroupDTO ? $item : ProductGroupDTO::fromArray($item),
            $data
        );

        return self::make($data);
    }

    public function getIds(): array
    {
        return $this->map(fn (ProductGroupDTO $dto) => $dto->getId())->all();
    }
}
