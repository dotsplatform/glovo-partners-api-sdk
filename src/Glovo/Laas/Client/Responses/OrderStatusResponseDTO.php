<?php
/**
 * Description of OrderStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Consts\OrderStatusState;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;

class OrderStatusResponseDTO extends DTO
{
    protected OrderStatusState $state;

    protected GlovoDateTime $updateTime;

    public static function fromArray(array $data): static
    {
        $data['state'] = OrderStatusState::from($data['state']);
        $data['updateTime'] = GlovoDateTime::fromString($data['updateTime']);

        return parent::fromArray($data);
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['state'] = $this->state->value;
        $data['updateTime'] = $this->updateTime->__toString();

        return $data;
    }

    public function getState(): OrderStatusState
    {
        return $this->state;
    }

    public function getUpdateTime(): GlovoDateTime
    {
        return $this->updateTime;
    }
}
