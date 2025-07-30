<?php
/**
 * Description of GlovoSuperCollection.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class GlovoSuperCollection extends DTO
{
    protected string $name;

    protected int $position;

    protected string $imageUrl;

    protected GlovoCollections $collections;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getCollections(): GlovoCollections
    {
        return $this->collections;
    }
}
