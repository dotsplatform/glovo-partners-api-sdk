<?php
/**
 * Description of UploadMenuRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Collections;

use Dots\Glovo\Partner\Client\Requests\Catalog\DTO\UploadMenuDTO;
use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\Catalog\UploadMenuResponseDTO;
use Saloon\Http\Response;

class GetCollectionsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu';

    public function __construct(
        protected readonly string $storeId,
        protected readonly UploadMenuDTO $dto,
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

    public function createDtoFromResponse(Response $response): UploadMenuResponseDTO
    {
        return UploadMenuResponseDTO::fromResponse($response);
    }
}
