<?php
/**
 * Description of GlovoResponseMocker.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Mock;

use Dots\Glovo\Laas\Client\Requests\AuthenticateRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\CancelOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\CreateOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\GetOrderCourierContactRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\GetOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\ValidateOrderRequest;
use Dots\Glovo\Laas\Client\Resources\Consts\ValidationResult;
use Dots\Glovo\Laas\Mock\Data\GlovoOAuthResponseGenerator;
use Dots\Glovo\Laas\Mock\Data\OrderCourierResponseGenerator;
use Dots\Glovo\Laas\Mock\Data\OrderInfoSuccessResponseGenerator;
use Dots\Glovo\Laas\Mock\Data\ValidateOrderResponseGenerator;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class GlovoResponseMocker
{
    public static function mockSuccessCreateOrder(
        array $data = [],
    ): void {
        $orderData = OrderInfoSuccessResponseGenerator::generate($data);
        $authData = GlovoOAuthResponseGenerator::generate();
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($authData),
            CreateOrderRequest::class => MockResponse::make($orderData),
        ]);
    }

    public static function mockSuccessValidateOrder(ValidationResult $result): void
    {
        $data = ValidateOrderResponseGenerator::generateSuccess($result);
        $authData = GlovoOAuthResponseGenerator::generate();
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($authData),
            ValidateOrderRequest::class => MockResponse::make($data),
        ]);
    }

    public static function mockSuccessGetOrder(
        array $data = [],
    ): void {
        $orderData = OrderInfoSuccessResponseGenerator::generate($data);
        $authData = GlovoOAuthResponseGenerator::generate();
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($authData),
            GetOrderRequest::class => MockResponse::make($orderData),
        ]);
    }

    public static function mockSuccessGetOrderCourierContact(): void
    {
        $orderData = OrderCourierResponseGenerator::generate();
        $authData = GlovoOAuthResponseGenerator::generate();
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($authData),
            GetOrderCourierContactRequest::class => MockResponse::make($orderData),
        ]);
    }

    public static function mockSuccessCancelOrder(): void
    {
        $authData = GlovoOAuthResponseGenerator::generate();
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($authData),
            CancelOrderRequest::class => MockResponse::make(),
        ]);
    }

    public static function mockGeAccessToken(array $data = []): void
    {
        $responseData = GlovoOAuthResponseGenerator::generate($data);
        MockClient::global([
            AuthenticateRequest::class => MockResponse::make($responseData),
        ]);
    }
}
