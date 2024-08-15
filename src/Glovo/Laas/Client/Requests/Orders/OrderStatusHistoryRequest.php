<?php
/**
 * Description of OrderStatusHistoryRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\OrderStatusHistoryResponseDTO;
use Saloon\Http\Response;

class OrderStatusHistoryRequest extends BaseGlovoRequest
{
    private const ENDPOINT_TEMPLATE = '/v2/laas/parcels/%s/history';

    public function __construct(
        protected readonly string $trackingNumber,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->trackingNumber);
    }

    public function createDtoFromResponse(Response $response): OrderStatusHistoryResponseDTO
    {
        return OrderStatusHistoryResponseDTO::fromResponse($response);
    }
}
