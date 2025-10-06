<?php
/**
 * Description of Menu.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Catalog;

use Dots\Data\DTO;

class Menu extends DTO
{
    protected Attributes $attributes;

    protected AttributeGroups $attribute_groups;

    protected Products $products;

    protected GlovoCollections $collections;

    protected GlovoSuperCollections $supercollections;

    protected Packages $packagings;

    public function getAttributes(): Attributes
    {
        return $this->attributes;
    }

    public function getAttributeGroups(): AttributeGroups
    {
        return $this->attribute_groups;
    }

    public function getProducts(): Products
    {
        return $this->products;
    }

    public function getCollections(): GlovoCollections
    {
        return $this->collections;
    }

    public function getSupercollections(): GlovoSuperCollections
    {
        return $this->supercollections;
    }

    public function getPackagings(): Packages
    {
        return $this->packagings;
    }
}
