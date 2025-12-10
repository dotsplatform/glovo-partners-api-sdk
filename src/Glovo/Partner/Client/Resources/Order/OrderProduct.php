<?php
/**
 * Description of OrderProduct.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;

class OrderProduct extends DTO
{
    protected string $id;

    protected string $purchased_product_id;

    protected int $quantity;

    protected int $price;

    protected ?int $discount;

    protected string $name;

    protected OrderProductAttributes $attributes;

    protected OrderSubProducts $sub_products;

    public static function fromArray(array $data): static
    {
        if (isset($data['attributes'])) {
            $data['attributes'] = OrderProductAttributes::fromArray($data['attributes']);
        }

        if (isset($data['sub_products'])) {
            $data['sub_products'] = OrderSubProducts::fromArray($data['sub_products']);
        }

        return parent::fromArray($data);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPurchasedProductId(): string
    {
        return $this->purchased_product_id;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttributes(): OrderProductAttributes
    {
        return $this->attributes;
    }
}
