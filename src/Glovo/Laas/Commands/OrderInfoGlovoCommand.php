<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class OrderInfoGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:info {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
        $order = $connector->getOrder($trackingNumber);
        dd($order);
    }
}
