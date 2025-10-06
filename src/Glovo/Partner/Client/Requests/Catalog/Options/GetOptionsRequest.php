<?php
/**
 * Description of GetOptionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Options;

use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class GetOptionsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/options/%s';

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
