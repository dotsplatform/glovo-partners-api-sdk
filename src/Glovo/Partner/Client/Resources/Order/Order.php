<?php
/**
 * Description of Order.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Partner\Client\Resources\Consts\PaymentMethod;

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

    protected ?OrderDeliveryAddress $delivery_address;

    protected ?array $bundled_orders;

    protected ?string $pick_up_code;

    protected bool $is_picked_up_by_customer;

    protected ?bool $cutlery_requested;

    protected int $partner_discounts_products;

    protected ?int $glovo_discounts_products;

    protected int $partner_discounted_products_total;

    protected ?int $discounted_products_total;

    protected ?int $total_customer_to_pay;

    protected ?string $loyalty_card;

    protected ?string $voucher_code;

    protected ?int $service_fee;

    public function getOrderId(): string
    {
        return $this->order_id;
    }

    public function getStoreId(): string
    {
        return $this->store_id;
    }

    public function getOrderTime(): ?string
    {
        return $this->order_time;
    }

    public function getEstimatedPickupTime(): ?string
    {
        return $this->estimated_pickup_time;
    }

    public function getUtcOffsetMinutes(): ?string
    {
        return $this->utc_offset_minutes;
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->payment_method;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getOrderCode(): string
    {
        return $this->order_code;
    }

    public function getAllergyInfo(): string
    {
        return $this->allergy_info;
    }

    public function getSpecialRequirements(): ?string
    {
        return $this->special_requirements;
    }

    public function getEstimatedTotalPrice(): int
    {
        return $this->estimated_total_price;
    }

    public function getDeliveryFee(): ?int
    {
        return $this->delivery_fee;
    }

    public function getMinimumBasketSurcharge(): ?int
    {
        return $this->minimum_basket_surcharge;
    }

    public function getCustomerCashPaymentAmount(): ?int
    {
        return $this->customer_cash_payment_amount;
    }

    public function getCourier(): Courier
    {
        return $this->courier;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getProducts(): OrderProducts
    {
        return $this->products;
    }

    public function getDeliveryAddress(): ?OrderDeliveryAddress
    {
        return $this->delivery_address;
    }

    public function getBundledOrders(): ?array
    {
        return $this->bundled_orders;
    }

    public function getPickUpCode(): ?string
    {
        return $this->pick_up_code;
    }

    public function isIsPickedUpByCustomer(): bool
    {
        return $this->is_picked_up_by_customer;
    }

    public function getCutleryRequested(): ?bool
    {
        return $this->cutlery_requested;
    }

    public function getPartnerDiscountsProducts(): int
    {
        return $this->partner_discounts_products;
    }

    public function getGlovoDiscountsProducts(): ?int
    {
        return $this->glovo_discounts_products;
    }

    public function getPartnerDiscountedProductsTotal(): int
    {
        return $this->partner_discounted_products_total;
    }

    public function getDiscountedProductsTotal(): ?int
    {
        return $this->discounted_products_total;
    }

    public function getTotalCustomerToPay(): ?int
    {
        return $this->total_customer_to_pay;
    }

    public function getLoyaltyCard(): ?string
    {
        return $this->loyalty_card;
    }

    public function getVoucherCode(): ?string
    {
        return $this->voucher_code;
    }

    public function getServiceFee(): ?int
    {
        return $this->service_fee;
    }
}
