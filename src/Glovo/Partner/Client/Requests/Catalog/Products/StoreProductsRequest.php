<?php
/**
 * Description of StoreProductsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Products;

use Dots\Glovo\Partner\Client\DTO\Catalog\ProductDTOs;
use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class StoreProductsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/products/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly ProductDTOs $dto,
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
