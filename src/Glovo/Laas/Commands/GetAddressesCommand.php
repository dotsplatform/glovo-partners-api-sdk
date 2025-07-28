<?php
/**
 * Description of GetAddressesCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

class GetAddressesCommand extends BaseGlovoCommand
{
    public $signature = 'glovo:addresses:get';

    public function handle(): void
    {
        $connector = $this->getGlovoConnector();
        $addresses = $connector->getAddresses();
        dd($addresses);
    }
}
