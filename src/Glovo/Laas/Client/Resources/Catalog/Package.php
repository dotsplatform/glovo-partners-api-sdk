<?php
/**
 * Description of Package.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class Package extends DTO
{
    protected string $id;

    protected string $referenceName;

    protected int $typeId;

    protected float $price;

    public function getId(): string
    {
        return $this->id;
    }

    public function getReferenceName(): string
    {
        return $this->referenceName;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
