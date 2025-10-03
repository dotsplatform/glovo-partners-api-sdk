<?php
/**
 * Description of OrderCancel.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Partner\Client\Resources\Consts\CancelReason;
use Dots\Glovo\Partner\Client\Resources\Consts\PaymentStrategy;

class OrderCancel extends DTO
{
    protected string $order_id;

    protected string $store_id;

    protected CancelReason $cancel_reason;

    protected PaymentStrategy $payment_strategy;

    public function getOrderId(): string
    {
        return $this->order_id;
    }

    public function getStoreId(): string
    {
        return $this->store_id;
    }

    public function getCancelReason(): CancelReason
    {
        return $this->cancel_reason;
    }

    public function getPaymentStrategy(): PaymentStrategy
    {
        return $this->payment_strategy;
    }
}
