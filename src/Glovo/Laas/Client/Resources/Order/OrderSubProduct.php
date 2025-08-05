<?php
/**
 * Description of OrderSubProduct.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;

class OrderSubProduct extends DTO
{
    protected string $id;

    protected int $quantity;

    protected int $price;

    protected ?int $discount;

    protected string $name;

    protected OrderProductAttributes $attributes;

    public function getId(): string
    {
        return $this->id;
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
