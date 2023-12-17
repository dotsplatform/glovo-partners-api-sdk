<?php
/**
 * Description of CreateOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Address;
use Dots\Glovo\Laas\Client\Resources\Contact;
use Dots\Glovo\Laas\Client\Resources\Order\OrderPrice;
use Dots\Glovo\Laas\Client\Resources\Order\PackageDetails;
use Dots\Glovo\Laas\Client\Resources\Order\PickupDetails;

class CreateOrderDTO extends DTO
{
    // Order delivery address
    protected Address $address;
    // Contact of the recipient
    protected Contact $contact;
    protected ?PackageDetails $packageDetails;
    protected ?string $packageId;
    protected PickupDetails $pickupDetails;
    protected ?OrderPrice $price;

    public static function fromArray(array $data): static
    {
        $data['address'] = Address::fromArray($data['address']);
        $data['contact'] = Contact::fromArray($data['contact']);
        $data['packageDetails'] = isset($data['packageDetails']) ? PackageDetails::fromArray($data['packageDetails']) : null;
        $data['pickupDetails'] = PickupDetails::fromArray($data['pickupDetails']);
        $data['price'] = !empty($data['price']) ? OrderPrice::fromArray($data['price']) : null;

        return parent::fromArray($data);
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getPackageDetails(): ?PackageDetails
    {
        return $this->packageDetails;
    }

    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    public function getPickupDetails(): PickupDetails
    {
        return $this->pickupDetails;
    }

    public function getPrice(): ?OrderPrice
    {
        return $this->price;
    }

}
