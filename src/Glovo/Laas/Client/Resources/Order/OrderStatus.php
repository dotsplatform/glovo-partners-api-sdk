<?php
/**
 * Description of Status.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Consts\OrderStatusState;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;

class OrderStatus extends DTO
{
    protected GlovoDateTime $createdAt;

    protected GlovoDateTime $lastUpdateAt;

    // Parcel state delivery time
    // e.g. 2019-08-24
    protected ?string $deliveryAt;

    protected OrderStatusState $state;

    protected StateChangeHistoryList $stateChangeHistory;

    public static function fromArray(array $data): static
    {
        $data['createdAt'] = GlovoDateTime::fromString($data['createdAt']);
        $data['lastUpdateAt'] = GlovoDateTime::fromString($data['lastUpdateAt']);
        $data['stateChangeHistory'] = StateChangeHistoryList::fromArray($data['stateChangeHistory'] ?? []);

        return parent::fromArray($data);
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['createdAt'] = $this->createdAt->__toString();
        $data['lastUpdateAt'] = $this->lastUpdateAt->__toString();
        $data['state'] = $this->state->value;

        return $data;
    }

    public function isCourierAssignedStatus(): bool
    {
        return $this->state->isCourierAssigned();
    }

    public function getCreatedAt(): GlovoDateTime
    {
        return $this->createdAt;
    }

    public function getLastUpdateAt(): GlovoDateTime
    {
        return $this->lastUpdateAt;
    }

    public function getDeliveryAt(): ?string
    {
        return $this->deliveryAt;
    }

    public function getState(): OrderStatusState
    {
        return $this->state;
    }

    public function getStateChangeHistory(): StateChangeHistoryList
    {
        return $this->stateChangeHistory;
    }
}
