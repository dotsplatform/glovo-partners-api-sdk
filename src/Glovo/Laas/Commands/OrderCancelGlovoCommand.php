<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class OrderCancelGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:cancel {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getClovoConnector();
        $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
        $connector->cancelOrder($trackingNumber);
    }
}
