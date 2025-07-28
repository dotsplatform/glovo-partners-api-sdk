<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class OrderSimulateFailDeliveryGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:simulate:failed {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
        $connector->simulateFailedDelivery($trackingNumber);
    }
}
