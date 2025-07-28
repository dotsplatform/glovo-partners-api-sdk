<?php
/**
 * Description of MenuDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Catalog\DTO;

use Dots\Data\DTO;

class MenuDTO extends DTO
{
    protected array $attributes;

    protected array $attributeGroups;

    protected array $products;

    protected array $collections;

    protected array $supercollections;

    protected array $packagings;
}
