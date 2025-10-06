<?php
/**
 * Description of GlovoCollection.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class GlovoCollection extends DTO
{
    protected string $name;

    protected int $position;

    protected string $image_url;

    protected Sections $sections;

    public static function fromArray(array $data): static
    {
        $data['sections'] = Sections::fromArray($data['sections'] ?? []);

        return parent::fromArray($data);
    }

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
        return $this->image_url;
    }

    public function getSections(): Sections
    {
        return $this->sections;
    }
}
