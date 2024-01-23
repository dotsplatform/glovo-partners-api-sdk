<?php
/**
 * Description of RegisterWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Webhooks;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\WebhooksListResponseDTO;
use Saloon\Http\Response;

/**
 * Register a webhook for a partner.
 *
 * The webhook will make a POST request to the specified callbackUrl url on
 * any order state update or courier position update.
 *
 * The webhook will be called for all the active orders created by the partner.
 */
class GetWebhooksListRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/v2/laas/webhooks';

    public function createDtoFromResponse(Response $response): WebhooksListResponseDTO
    {
        return WebhooksListResponseDTO::fromResponse($response);
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }
}
