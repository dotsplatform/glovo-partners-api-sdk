<?php
/**
 * Description of WebhooksResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Glovo\Laas\Client\Resources\Webhook\WebhookDTO;
use Saloon\Http\Response;

class WebhookResponseDTO extends GlovoResponseDTO
{
    protected WebhookDTO $webhook;

    public static function fromResponse(Response $response): static
    {
        $data = [
            'webhook' => $response->json(),
        ];

        return static::fromArray($data);
    }

    public static function fromArray(array $data): static
    {
        $data['webhook'] = WebhookDTO::fromArray($data['webhook']);

        return parent::fromArray($data);
    }

    public function getWebhook(): WebhookDTO
    {
        return $this->webhook;
    }
}
