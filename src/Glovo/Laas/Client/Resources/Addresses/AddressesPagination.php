<?php
/**
 * Description of Address.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Addresses;

use Dots\Data\DTO;

class AddressesPagination extends DTO
{
    protected int $total;

    protected int $page;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
