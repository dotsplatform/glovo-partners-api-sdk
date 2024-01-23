<?php
/**
 * Description of EstimatedTimeOfArrival.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Consts\EstimatedTimeOfArrivalType;

class EstimatedTimeOfArrival extends DTO
{
    protected EstimatedTimeOfArrivalType $type;

    protected GlovoDateTime $eta;

    public static function fromArray(array $data): static
    {
        $data['eta'] = GlovoDateTime::fromString($data['eta']);

        return parent::fromArray($data);
    }

    public function getType(): EstimatedTimeOfArrivalType
    {
        return $this->type;
    }

    public function getEtaTimestamp(): int
    {
        return $this->getEta()->getTimestamp();
    }

    public function getEta(): GlovoDateTime
    {
        return $this->eta;
    }
}
