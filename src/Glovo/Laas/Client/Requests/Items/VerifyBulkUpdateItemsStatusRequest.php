<?php
/**
 * Description of VerifyBulkUpdateItemsStatusRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\Catalog\UploadMenuResponseDTO;
use Saloon\Http\Response;

class VerifyBulkUpdateItemsStatusRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu/updates/{transactionId}';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $transactionId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId, $this->transactionId);
    }

    public function createDtoFromResponse(Response $response): UploadMenuResponseDTO
    {
        return UploadMenuResponseDTO::fromResponse($response);
    }
}
