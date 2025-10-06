<?php
/**
 * Description of DeleteGroupOptionsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Options;

use Dots\Glovo\Partner\Client\Requests\DeleteGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class DeleteGroupOptionsRequest extends DeleteGlovoRequest
{
    private const ENDPOINT = '/options/%s/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly string $groupId,
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
