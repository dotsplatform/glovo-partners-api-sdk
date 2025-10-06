<?php
/**
 * Description of DeleteOptionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Options;

use Dots\Glovo\Partner\Client\Requests\DeleteGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class DeleteOptionsRequest extends DeleteGlovoRequest
{
    private const ENDPOINT = '/options/%s/%s/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $groupId,
        protected readonly string $optionId,
    ) {
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
