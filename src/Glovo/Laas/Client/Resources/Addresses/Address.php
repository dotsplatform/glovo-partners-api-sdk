<?php
/**
 * Description of Address.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Addresses;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Coordinates;

class Address extends DTO
{
    protected string $id;

    protected string $address;

    protected string $phoneNumber;

    protected Coordinates $coordinates;

    protected string $addressDetails;

    protected bool $isDefault;

    protected string $creationTime;

    public function getId(): string
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }

    public function getAddressDetails(): string
    {
        return $this->addressDetails;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function getCreationTime(): string
    {
        return $this->creationTime;
    }
}
