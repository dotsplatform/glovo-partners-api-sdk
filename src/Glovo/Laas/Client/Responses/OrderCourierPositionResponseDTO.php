<?php
/**
 * Description of Courier.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

class OrderCourierPositionResponseDTO extends GlovoResponseDTO
{
    protected float $latitude;
    protected float $longitude;
}
