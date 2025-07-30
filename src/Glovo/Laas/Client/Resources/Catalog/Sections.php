<?php
/**
 * Description of Sections.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Illuminate\Support\Collection;

/**
 * @extends GlovoCollection<int, Section>
 */
class Sections extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => Section::fromArray($item),
                $data
            )
        );
    }
}
