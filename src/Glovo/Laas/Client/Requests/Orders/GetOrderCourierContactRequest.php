<?php
/**
 * Description of GetOrderCourierInformationRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\OrderCourierContactResponseDTO;
use Saloon\Http\Response;

/**
 * @url https://logistics-docs.glovoapp.com/laas-partners/index.html#operation/getParcelTrackingUrlByTrackingNumber
 * Get courier information
 *
 * This endpoint retrieves information about the courier that accepted the specific order.
 * If the order has not yet been accepted by any courier, the response will be null.
 */
class GetOrderCourierContactRequest extends BaseGlovoRequest
{
    private const ENDPOINT_TEMPLATE = '/v2/laas/parcels/%s/courier-contact';

    public function __construct(
        protected readonly string $trackingNumber,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->trackingNumber);
    }

    public function createDtoFromResponse(Response $response): OrderCourierContactResponseDTO
    {
        return OrderCourierContactResponseDTO::fromResponse($response);
    }
}
