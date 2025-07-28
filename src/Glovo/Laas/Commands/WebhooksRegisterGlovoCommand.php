<?php
/**
 * Description of WebhooksListGlovoCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

use Dots\Glovo\Laas\Client\Requests\Webhooks\DTO\RegisterWebhookDTO;
use Dots\Glovo\Laas\Client\Resources\Consts\WebhookEventType;
use Dots\Glovo\Laas\Client\Responses\ErrorResponseDTO;
use Saloon\Exceptions\SaloonException;

class WebhooksRegisterGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:webhooks:register';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        try {
            $dto = $connector->registerWebhook($this->getRegisterWebhookDTO());
            $this->info('Webhook registered. ID: '.$dto->getWebhook()->getWebhookId());
        } catch (SaloonException $e) {
            $this->error($e->getMessage());
        }
    }

    private function getRegisterWebhookDTO(): RegisterWebhookDTO
    {
        return RegisterWebhookDTO::fromArray([
            'callbackUrl' => 'https://api-release.dotsdev.live/api/v1/integrations/glovo/webhooks',
            'eventType' => WebhookEventType::POSITION_UPDATE,
            'partnerSecret' => 'secret',
            'retryConfig' => [
                'maxRetryCount' => 3,
            ],
        ]);
    }
}
