<?php
/**
 * Description of GetAddressesRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Addresses;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\GetAddressesResponseDTO;
use Saloon\Http\Response;

class GetAddressesRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/v2/laas/addresses';

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }

    public function createDtoFromResponse(Response $response): GetAddressesResponseDTO
    {
        return GetAddressesResponseDTO::fromResponse($response);
    }
}
