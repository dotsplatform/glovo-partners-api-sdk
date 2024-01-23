<?php
/**
 * Description of CreateOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Address;
use Dots\Glovo\Laas\Client\Resources\Order\PickupDetails;

class ValidateOrderDTO extends DTO
{
    protected Address $address;

    protected PickupDetails $pickupDetails;

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getPickupDetails(): PickupDetails
    {
        return $this->pickupDetails;
    }
}
