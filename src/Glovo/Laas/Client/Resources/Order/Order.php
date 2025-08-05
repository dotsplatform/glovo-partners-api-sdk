<?php
/**
 * Description of Order.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Consts\PaymentMethod;
use Dots\Glovo\Laas\Client\Resources\Price;

class Order extends DTO
{
    protected string $order_id;

    protected string $store_id;

    protected ?string $order_time;

    protected ?string $estimated_pickup_time;

    protected ?string $utc_offset_minutes;

    protected PaymentMethod $payment_method;

    protected string $currency;

    protected string $order_code;

    protected string $allergy_info;

    protected ?string $special_requirements;

    protected int $estimated_total_price;

    protected ?int $delivery_fee;

    protected ?int $minimum_basket_surcharge;

    protected ?int $customer_cash_payment_amount;

    protected Courier $courier;

    protected Customer $customer;

    protected OrderProducts $products;


}
