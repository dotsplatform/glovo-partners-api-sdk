<?php
/**
 * Description of Package.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class Package extends DTO
{
    protected string $id;

    protected string $reference_name;

    protected int $type_id;

    protected float $price;

    public function getId(): string
    {
        return $this->id;
    }

    public function getReferenceName(): string
    {
        return $this->reference_name;
    }

    public function getTypeId(): int
    {
        return $this->type_id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
