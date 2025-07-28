<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

use Exception;

class OrderStatusHistoryGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:status:history {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
        try {
            $dto = $connector->getOrderStatusHistory($trackingNumber);
            dd($dto);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
