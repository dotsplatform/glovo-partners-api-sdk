<?php
/**
 * Description of GlovoLaasServiceProvider.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas;

use Dots\Glovo\Laas\Client\DTO\GlovoAuthDTO;
use Dots\Glovo\Laas\Client\GlovoConnector;
use Dots\Glovo\Laas\Commands\GetAddressesCommand;
use Dots\Glovo\Laas\Commands\OrderCancelGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderCourierContactGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderCourierPositionGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderCreateGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderInfoGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderSimulateFailDeliveryGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderSimulateSuccessfulDeliveryGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderStatusHistoryGlovoCommand;
use Dots\Glovo\Laas\Commands\OrderValidateGlovoCommand;
use Dots\Glovo\Laas\Commands\WebhooksDeleteGlovoCommand;
use Dots\Glovo\Laas\Commands\WebhooksListGlovoCommand;
use Dots\Glovo\Laas\Commands\WebhooksRegisterGlovoCommand;
use Dots\Glovo\Laas\Commands\WebhooksSimulateGlovoCommand;
use Illuminate\Support\ServiceProvider;

class GlovoLaasServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../../config/glovo-laas.php' => config_path('glovo-laas.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->registerArtisanCommands();
        }

        $this->app->bind(GlovoConnector::class, function () {
            return new GlovoConnector(
                GlovoAuthDTO::fromArray([
                    'clientId' => config('glovo-laas.auth.clientId'),
                    'clientSecret' => config('glovo-laas.auth.clientSecret'),
                ]),
            );
        });
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../../config/glovo-laas.php',
            'glovo-laas',
        );
    }

    protected function registerArtisanCommands(): void
    {
        $this->commands([
            OrderCancelGlovoCommand::class,
            OrderCourierContactGlovoCommand::class,
            OrderCourierPositionGlovoCommand::class,
            OrderCreateGlovoCommand::class,
            OrderInfoGlovoCommand::class,
            OrderSimulateSuccessfulDeliveryGlovoCommand::class,
            OrderSimulateFailDeliveryGlovoCommand::class,
            OrderValidateGlovoCommand::class,
            WebhooksDeleteGlovoCommand::class,
            WebhooksListGlovoCommand::class,
            WebhooksRegisterGlovoCommand::class,
            WebhooksSimulateGlovoCommand::class,
            OrderStatusHistoryGlovoCommand::class,
            GetAddressesCommand::class,
        ]);
    }
}
