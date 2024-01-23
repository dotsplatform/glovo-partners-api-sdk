<?php
/**
 * Description of StateChangeHistory.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Order;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Consts\OrderStatusState;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;

class StateChangeHistory extends DTO
{
    protected GlovoDateTime $date;

    protected ?string $reason;

    protected OrderStatusState $value;

    public static function fromArray(array $data): static
    {
        $data['date'] = GlovoDateTime::fromString($data['date']);
        $data['value'] = OrderStatusState::from($data['value']);

        return parent::fromArray($data);
    }

    public function getDate(): GlovoDateTime
    {
        return $this->date;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function getValue(): OrderStatusState
    {
        return $this->value;
    }
}
