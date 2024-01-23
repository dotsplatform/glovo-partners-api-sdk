<?php
/**
 * Description of PickupDetails.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Address;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;

class PickupDetails extends DTO
{
    protected Address $address;

    protected ?string $pickupOrderCode;

    protected ?GlovoDateTime $pickupTime;

    protected ?string $pickupPhone;

    public static function fromArray(array $data): static
    {
        $data['pickupTime'] = isset($data['pickupTime']) ? GlovoDateTime::fromString($data['pickupTime']) : null;

        return parent::fromArray($data);
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['pickupTime'] = $this->getPickupTime()?->__toString();

        return $data;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getPickupOrderCode(): ?string
    {
        return $this->pickupOrderCode;
    }

    public function getPickupTime(): ?GlovoDateTime
    {
        return $this->pickupTime;
    }

    public function getPickupPhone(): ?string
    {
        return $this->pickupPhone;
    }
}
