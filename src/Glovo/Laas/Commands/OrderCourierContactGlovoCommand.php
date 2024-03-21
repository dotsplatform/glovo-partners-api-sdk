<?php
/**
 * Description of OrderCreate.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

use Saloon\Exceptions\SaloonException;

class OrderCourierContactGlovoCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:orders:courier:contact {trackingNumber}';

    public function handle(): void
    {
        $connector = $this->getClovoConnector();
        try {
            $trackingNumber = $this->assertStringValue($this->argument('trackingNumber'));
            $dto = $connector->getOrderCourierContact($trackingNumber);
            dd($dto);
        } catch (SaloonException $e) {
            $this->error($e->getMessage());
        }
    }
}
