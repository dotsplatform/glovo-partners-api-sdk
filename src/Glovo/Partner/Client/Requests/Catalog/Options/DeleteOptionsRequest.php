<?php
/**
 * Description of DeleteOptionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Options;

use Dots\Glovo\Partner\Client\DTO\Catalog\OptionDTOs;
use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Saloon\Http\Response;

class DeleteOptionsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu';

    public function __construct(
        protected readonly string $storeId,
        protected readonly OptionDTOs $dto,
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
