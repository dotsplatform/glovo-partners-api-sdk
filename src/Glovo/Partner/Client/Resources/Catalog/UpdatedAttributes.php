<?php
/**
 * Description of UpdatedAttributes.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, UpdatedAttribute>
 */
class UpdatedAttributes extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => UpdatedAttribute::fromArray($item),
                $data
            )
        );
    }
}
