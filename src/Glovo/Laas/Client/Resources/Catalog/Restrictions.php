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
    protected bool $isAlcoholic;

    protected bool $isTobacco;

    public function isAlcoholic(): bool
    {
        return $this->isAlcoholic;
    }

    public function isTobacco(): bool
    {
        return $this->isTobacco;
    }
}
