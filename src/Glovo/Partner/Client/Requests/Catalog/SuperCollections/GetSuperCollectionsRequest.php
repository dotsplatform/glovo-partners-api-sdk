<?php
/**
 * Description of GetSuperCollectionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\SuperCollections;

use Dots\Glovo\Partner\Client\Requests\BaseGlovoRequest;
use Saloon\Http\Response;

class GetSuperCollectionsRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/menu-suppercollection/%s';

    public function __construct(
        protected readonly string $storeId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId);
    }

    public function createDtoFromResponse(Response $response): UploadMenuResponseDTO
    {
        return UploadMenuResponseDTO::fromResponse($response);
    }
}
