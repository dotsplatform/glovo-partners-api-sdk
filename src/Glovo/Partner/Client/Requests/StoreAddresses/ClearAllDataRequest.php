<?php
/**
 * Description of ClearAllDataRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\StoreAddresses;

use Dots\Glovo\Partner\Client\Requests\DeleteGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class ClearAllDataRequest extends DeleteGlovoRequest
{
    private const ENDPOINT = '/store-addresses/%s/clear-all-data';

    public function __construct(
        protected readonly string $storeId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId);
    }

    public function createDtoFromResponse(Response $response): GlovoResponseDTO
    {
        return GlovoResponseDTO::fromResponse($response);
    }
}
