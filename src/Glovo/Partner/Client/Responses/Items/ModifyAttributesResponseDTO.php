<?php
/**
 * Description of ModifyAttributesResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Responses\Items;

use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;

class ModifyAttributesResponseDTO extends GlovoResponseDTO
{
    protected string $id;

    protected string $name;

    protected bool $selected_by_default;

    protected string $price;

    protected bool $available;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isSelectedByDefault(): bool
    {
        return $this->selected_by_default;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
