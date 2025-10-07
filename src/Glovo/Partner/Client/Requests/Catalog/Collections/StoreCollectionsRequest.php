<?php
/**
 * Description of StoreCollectionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Collections;

use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Resources\Catalog\CollectionDTOs;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class StoreCollectionsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/menu-collections/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly CollectionDTOs $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
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
