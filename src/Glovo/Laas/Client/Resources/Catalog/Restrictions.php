<?php
/**
 * Description of Restrictions.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Catalog;

use Dots\Data\DTO;

class Restrictions extends DTO
{
    protected bool $is_alcoholic;

    protected bool $is_tobacco;

    public function isAlcoholic(): bool
    {
        return $this->is_alcoholic;
    }

    public function isTobacco(): bool
    {
        return $this->is_tobacco;
    }
}
