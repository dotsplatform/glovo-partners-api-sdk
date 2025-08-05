<?php
/**
 * Description of OrderDeliveryAddress.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;

class OrderDeliveryAddress extends DTO
{
    protected ?string $label;

    protected ?float $latitude;

    protected ?float $longitude;

    protected ?string $street_name;

    protected ?string $street_number;

    protected ?string $province;

    protected ?string $postal_code;

    protected ?string $floor_number;

    protected ?string $door_number;

    protected ?string $building_name;

    protected ?string $additional_information;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function getStreetName(): ?string
    {
        return $this->street_name;
    }

    public function getStreetNumber(): ?string
    {
        return $this->street_number;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function getFloorNumber(): ?string
    {
        return $this->floor_number;
    }

    public function getDoorNumber(): ?string
    {
        return $this->door_number;
    }

    public function getBuildingName(): ?string
    {
        return $this->building_name;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additional_information;
    }
}
