<?php
/**
 * Description of VerifyMenuUploadResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Glovo\Laas\Client\Resources\Consts\MenuStatus;

class VerifyMenuUploadResponseDTO extends GlovoResponseDTO
{
    protected string $transactionId;

    protected MenuStatus $status;

    protected string $lastUpdatedAt;

    protected array $details;

//    public static function fromArray(array $data): static
//    {
//        $data['estimatedTimeOfArrival'] = ! empty($data['estimatedTimeOfArrival']) ?
//                EstimatedTimeOfArrival::fromArray($data['estimatedTimeOfArrival']) :
//                null;
//        $data['status'] = OrderStatus::fromArray($data['status']);
//        $data['stateChangeHistory'] = StateChangeHistoryList::fromArray($data['stateChangeHistory'] ?? []);
//        $data['address'] = Address::fromArray($data['address']);
//        $data['contact'] = Contact::fromArray($data['contact']);
//        $data['packageDetails'] = PackageDetails::fromArray($data['packageDetails']);
//        $data['pickupDetails'] = PickupDetails::fromArray($data['pickupDetails']);
//        $data['price'] = ! empty($data['price']) ? OrderPrice::fromArray($data['price']) : null;
//
//        return parent::fromArray($data);
//    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function getStatus(): MenuStatus
    {
        return $this->status;
    }

    public function getLastUpdatedAt(): string
    {
        return $this->lastUpdatedAt;
    }

    public function getDetails(): array
    {
        return $this->details;
    }
}
