<?php
/**
 * Description of PaymentMethod.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum PaymentMethod: string
{
    // Indicates that the courier will pay for the order with cash
    case CASH = 'CASH';

    // Indicates that Glovo will pay for the order by an invoice sent to the partner
    case DELAYED = 'DELAYED';
}
