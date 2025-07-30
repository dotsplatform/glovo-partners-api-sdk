<?php
/**
 * Description of Packages.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends GlovoCollection<int, Package>
 */
class Packages extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => Package::fromArray($item),
                $data
            )
        );
    }
}
