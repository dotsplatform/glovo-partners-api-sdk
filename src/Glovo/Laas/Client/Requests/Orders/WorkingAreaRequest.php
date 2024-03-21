<?php
/**
 * Description of WorkingAreaRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\ValidateOrderResponseDTO;
use Saloon\Http\Response;

class WorkingAreaRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/v2/laas/working-areas';

    public function createDtoFromResponse(Response $response): array
    {
        return $response->json();
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }
}
