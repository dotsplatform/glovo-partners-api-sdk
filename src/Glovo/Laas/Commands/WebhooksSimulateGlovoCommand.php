<?php
/**
 * Description of WebhooksListGlovoCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

use Dots\Glovo\Laas\Client\Responses\ErrorResponseDTO;
use Saloon\Exceptions\SaloonException;

class WebhooksSimulateGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:webhooks:simulate {webhookId}';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        try {
            $webhookId = $this->assertIntValue($this->argument('webhookId'));
            $connector->simulateWebhook($webhookId);
        } catch (SaloonException $e) {
            $this->error($e->getMessage());
        }
    }
}
