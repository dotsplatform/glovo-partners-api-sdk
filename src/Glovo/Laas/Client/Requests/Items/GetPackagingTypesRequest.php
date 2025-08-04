<?php
/**
 * Description of VerifyBulkUpdateItemsStatusRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\Items\GetPackagingTypesResponseDTO;
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
