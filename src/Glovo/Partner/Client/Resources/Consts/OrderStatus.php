<?php
/**
 * Description of OrderStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum OrderStatus: string
{
    // The order has been accepted by the store. Be aware that if you don't accept the order we will still move forward with the order, as we don't require an acceptance to proceed.
    case ACCEPTED = 'ACCEPTED';

    // The order is ready to be picked up by a courier or the customer (Only available for orders delivered by Glovo couriers)
    case READY_FOR_PICKUP = 'READY_FOR_PICKUP';

    // The order has been picked up by the customer (Only available for stores with Pickup by customer configuration enabled)
    case PICKED_UP_BY_CUSTOMER = 'PICKED_UP_BY_CUSTOMER';

    // The courier has collected the order in the store and is now being delivered to the customer (Only available for Marketplace orders)
    case OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
}
