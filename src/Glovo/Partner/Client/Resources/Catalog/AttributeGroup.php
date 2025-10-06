<?php
/**
 * Description of AttributeGroup.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class AttributeGroup extends DTO
{
    protected string $id;

    protected string $name;

    protected int $min;

    protected int $max;

    protected bool $collapse;

    protected bool $multiple_selection;

    protected array $attributes;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function isCollapse(): bool
    {
        return $this->collapse;
    }

    public function isMultipleSelection(): bool
    {
        return $this->multiple_selection;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
