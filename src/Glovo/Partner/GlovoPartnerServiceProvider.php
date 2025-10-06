<?php
/**
 * Description of GlovoPartnerServiceProvider.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner;

use Dots\Glovo\Partner\Client\DTO\GlovoPartnerAuthDTO;
use Dots\Glovo\Partner\Client\GlovoPartnerConnector;
use Illuminate\Support\ServiceProvider;

class GlovoPartnerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../../config/glovo-partner.php' => config_path('glovo-partner.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->registerArtisanCommands();
        }

        $this->app->bind(GlovoPartnerConnector::class, function () {
            return new GlovoPartnerConnector(
                GlovoPartnerAuthDTO::fromArray([
                    'token' => config('glovo-partner.auth.token'),
                ]),
            );
        });
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../../config/glovo-partner.php',
            'glovo-partner',
        );
    }

    protected function registerArtisanCommands(): void
    {
        $this->commands([
            //
        ]);
    }
}
