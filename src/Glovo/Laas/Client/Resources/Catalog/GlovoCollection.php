<?php
/**
 * Description of GlovoCollection.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class GlovoCollection extends DTO
{
    protected string $name;

    protected int $position;

    protected string $imageUrl;

    protected Sections $sections;

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

    public function getSections(): Sections
    {
        return $this->sections;
    }
}
