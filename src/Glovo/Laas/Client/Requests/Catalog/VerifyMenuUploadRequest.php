<?php
/**
 * Description of UploadMenuRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Catalog;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Requests\Catalog\DTO\UploadMenuDTO;
use Dots\Glovo\Laas\Client\Responses\VerifyMenuUploadResponseDTO;
use Saloon\Http\Response;

class VerifyMenuUploadRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu/%s';

    public function __construct(
        protected readonly UploadMenuDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }

    public function createDtoFromResponse(Response $response): VerifyMenuUploadResponseDTO
    {
        return VerifyMenuUploadResponseDTO::fromResponse($response);
    }
}
