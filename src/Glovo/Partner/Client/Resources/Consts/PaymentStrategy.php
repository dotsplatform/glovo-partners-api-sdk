<?php
/**
 * Description of PaymentStrategy.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum PaymentStrategy: string
{
    // Glovo will not pay the partner for the order products
    case PAY_NOTHING = 'PAY_NOTHING';

    // Glovo will pay the partner for the order products
    case PAY_PRODUCTS = 'PAY_PRODUCTS';
}
