<?php
/**
 * Description of UpdateOrderStatusRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Orders;

use Dots\Glovo\Partner\Client\Requests\PutGlovoRequest;
use Dots\Glovo\Partner\Client\Resources\Order\UpdateOrderStatusDTO;
use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Saloon\Http\Response;

class UpdateOrderStatusRequest extends PutGlovoRequest
{
    private const ENDPOINT = '/orders/status/%s';

    public function __construct(
        protected readonly string $storeId,
        protected readonly UpdateOrderStatusDTO $dto,
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
