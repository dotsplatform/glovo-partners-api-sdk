<?php
/**
 * Description of GlovoLaasServiceProviderTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests\Glovo\Laas;

use Dots\Glovo\Laas\Client\GlovoConnector;
use Tests\TestCase;

class GlovoLaasServiceProviderTest extends TestCase
{
    protected function defineEnvironment($app): void
    {
        $app['config']->set('glovo-laas.auth.clientId', 'SOME_CLIENT_ID');
        $app['config']->set('glovo-laas.auth.clientSecret', 'SOME_CLIENT_SECRET');
    }

    public function testBooted(): void
    {
        $connector = app(GlovoConnector::class);
        $this->assertEquals(true, $connector->isStageEnv());
        $this->assertEquals('SOME_CLIENT_ID', $connector->getAuthDTO()->getClientId());
        $this->assertEquals('SOME_CLIENT_SECRET', $connector->getAuthDTO()->getClientSecret());
    }
}
