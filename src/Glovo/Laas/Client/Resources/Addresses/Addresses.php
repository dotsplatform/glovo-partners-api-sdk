<?php
/**
 * Description of Addresses.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Addresses;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, Address>
 */
class Addresses extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => Address::fromArray($item),
                $data
            )
        );
    }
}
