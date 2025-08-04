<?php
/**
 * Description of PackagingTypes.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Items;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, PackagingType>
 */
class PackagingTypes extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => PackagingType::fromArray($item),
                $data
            )
        );
    }
}
