<?php
/**
 * Description of BulkUpdateItemsRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\Products;

use Dots\Glovo\Partner\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Partner\Client\Resources\Catalog\BulkUpdateProductDTOs;

class BulkUpdateProductsRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/products/%s/bulk';

    public function __construct(
        protected readonly string $storeId,
        protected readonly BulkUpdateProductDTOs $dto,
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
}
