<?php
/**
 * Description of WebhooksListGlovoCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class WebhooksListGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:webhooks:list';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        $dto = $connector->getWebhooks();
        dd($dto);
    }
}
