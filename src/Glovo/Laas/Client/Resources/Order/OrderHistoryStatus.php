<?php
/**
 * Description of OrderHistoryStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\Entity;
use Dots\Glovo\Laas\Client\Resources\Consts\OrderStatusState;

class OrderHistoryStatus extends Entity
{
    protected OrderStatusState $state;

    protected ?string $updateTime;

    public function getState(): OrderStatusState
    {
        return $this->state;
    }

    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
}
