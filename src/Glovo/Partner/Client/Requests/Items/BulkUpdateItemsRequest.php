<?php
/**
 * Description of BulkUpdateItemsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Items;

use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Responses\Items\BulkUpdateItemsResponseDTO;
use Dots\Glovo\Partner\Client\Requests\Items\DTO\BulkUpdateItemsDTO;
use Saloon\Http\Response;

class BulkUpdateItemsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu/updates';

    public function __construct(
        protected readonly string $storeId,
        protected readonly BulkUpdateItemsDTO $dto,
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

    public function createDtoFromResponse(Response $response): BulkUpdateItemsResponseDTO
    {
        return BulkUpdateItemsResponseDTO::fromResponse($response);
    }
}
