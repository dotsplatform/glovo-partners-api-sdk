<?php
/**
 * Description of Courier.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;

class Courier extends DTO
{
    protected ?string $name;

    protected ?string $phone_number;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }
}
