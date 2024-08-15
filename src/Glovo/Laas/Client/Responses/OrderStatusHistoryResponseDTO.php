<?php
/**
 * Description of OrderStatusHistoryResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Glovo\Laas\Client\Resources\Order\OrderHistoryStatusesList;

class OrderStatusHistoryResponseDTO extends GlovoResponseDTO
{
    protected OrderHistoryStatusesList $stateChangeHistory;

    public static function fromArray(array $data): static
    {
        $data['stateChangeHistory'] = OrderHistoryStatusesList::fromArray($data['stateChangeHistory'] ?? []);

        return parent::fromArray($data);
    }

    public function getStateChangeHistory(): OrderHistoryStatusesList
    {
        return $this->stateChangeHistory;
    }
}
