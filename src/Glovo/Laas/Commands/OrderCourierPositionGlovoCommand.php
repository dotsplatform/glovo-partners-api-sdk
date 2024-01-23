<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class OrderCourierPositionGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:courier:position {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getClovoConnector();
        $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
        $order = $connector->getOrderCourierPosition($trackingNumber);
        dd($order);
    }
}
