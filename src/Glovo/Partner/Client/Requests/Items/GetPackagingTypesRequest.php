<?php
/**
 * Description of GetPackagingTypesRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Items;

use Dots\Glovo\Partner\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\Items\GetPackagingTypesResponseDTO;
use Saloon\Http\Response;

class GetPackagingTypesRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/packagings/types';

    public function __construct(
        protected readonly string $storeId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId);
    }

    public function createDtoFromResponse(Response $response): GetPackagingTypesResponseDTO
    {
        return GetPackagingTypesResponseDTO::fromResponse($response);
    }
}
