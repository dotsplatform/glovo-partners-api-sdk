<?php
/**
 * Description of GetCollectionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Collections;

use Dots\Glovo\Partner\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class GetCollectionsRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/menu-collections/%s';

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
