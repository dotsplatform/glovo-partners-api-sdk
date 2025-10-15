<?php

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Partner\Client\Resources\Consts\OrderStatus;

class UpdateOrderStatusDTO extends DTO
{
    protected string $orderId;

    protected OrderStatus $status;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getStatus(): OrderStatus
    {
        return $this->status;
    }
}
