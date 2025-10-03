<?php
/**
 * Description of ValidateMenuRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog;

use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\Catalog\ValidateMenuResponseDTO;
use Dots\Glovo\Partner\Client\Resources\Catalog\Menu;
use Saloon\Http\Response;

class ValidateMenuRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/paris/menu/validate';

    public function __construct(
        protected readonly Menu $dto,
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

    public function createDtoFromResponse(Response $response): ValidateMenuResponseDTO
    {
        return ValidateMenuResponseDTO::fromResponse($response);
    }
}
