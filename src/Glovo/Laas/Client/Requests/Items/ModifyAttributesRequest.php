<?php
/**
 * Description of ModifyAttributesRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items;

use Dots\Glovo\Laas\Client\Requests\Items\DTO\ModifyAttributesDTO;
use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\Catalog\UploadMenuResponseDTO;
use Saloon\Http\Response;

class ModifyAttributesRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/attributes/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $attributeId,
        protected readonly ModifyAttributesDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->storeId, $this->attributeId);
    }

    public function createDtoFromResponse(Response $response): UploadMenuResponseDTO
    {
        return UploadMenuResponseDTO::fromResponse($response);
    }
}
