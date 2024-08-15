<?php
/**
 * Description of OrderHistoryStatusesList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, OrderHistoryStatus>
 */
class OrderHistoryStatusesList extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(array_map(
            fn (array $item) => OrderHistoryStatus::fromArray($item),
            $data,
        ));
    }
}
