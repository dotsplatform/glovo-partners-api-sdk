<?php
/**
 * Description of Menu.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class Product extends DTO
{
    protected string $id;

    protected string $name;

    protected float $price;

    protected string $imageUrl;

    protected array $extraImageUrls;

    protected ?Restrictions $restrictions;

    protected string $description;

    protected array $attributesGroups;

    protected bool $available;

    protected array $crossSellingOptions;

    protected array $dietaryLabels;

    protected string $packaging;
}
