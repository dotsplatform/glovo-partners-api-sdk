<?php
/**
 * Description of ModifyProductsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items;

use Dots\Glovo\Laas\Client\Requests\Items\DTO\ModifyProductsDTO;
use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\Items\ModifyProductsResponseDTO;
use Saloon\Http\Response;

class ModifyProductsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/products/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $productId,
        protected readonly ModifyProductsDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId, $this->productId);
    }

    public function createDtoFromResponse(Response $response): ModifyProductsResponseDTO
    {
        return ModifyProductsResponseDTO::fromResponse($response);
    }
}
