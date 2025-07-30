<?php
/**
 * Description of VerifyMenuUploadRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Catalog;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\VerifyMenuUploadResponseDTO;
use Saloon\Http\Response;

class VerifyMenuUploadRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $transactionId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId, $this->transactionId);
    }

    public function createDtoFromResponse(Response $response): VerifyMenuUploadResponseDTO
    {
        return VerifyMenuUploadResponseDTO::fromResponse($response);
    }
}
