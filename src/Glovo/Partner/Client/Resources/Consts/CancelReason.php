<?php
/**
 * Description of CancelReason.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum CancelReason: string
{
    // Products are not available in store
    case PRODUCTS_NOT_AVAILABLE = 'PRODUCTS_NOT_AVAILABLE';

    // Order could not be delivered by partner
    case STORE_CAN_NOT_DELIVER = 'STORE_CAN_NOT_DELIVER';

    // Order cancelled due to issues with partner's device
    case PARTNER_PRINTER_ISSUE = 'PARTNER_PRINTER_ISSUE';

    // Customer has cancelled the order
    case USER_ERROR = 'USER_ERROR';

    // It is impossible to fulfill the customer's request
    case ORDER_NOT_FEASIBLE = 'ORDER_NOT_FEASIBLE';

    // Other cancellation reasons that do not fall into the above categories
    case OTHER = 'OTHER';

    public static function fromResponse(string $value): self
    {
        return self::tryFrom($value) ?? self::OTHER;
    }
}
