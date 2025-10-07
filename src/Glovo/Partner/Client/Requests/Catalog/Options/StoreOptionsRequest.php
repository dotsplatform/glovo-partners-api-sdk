<?php
/**
 * Description of StoreOptionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Options;

use Dots\Glovo\Partner\Client\Requests\PatchGlovoRequest;
use Dots\Glovo\Partner\Client\Resources\Catalog\OptionGroupDTOs;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class StoreOptionsRequest extends PatchGlovoRequest
{
    private const ENDPOINT = '/options/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly OptionGroupDTOs $dto,
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
