<?php
/**
 * Description of GlovoConnector.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client;

use Dots\Glovo\Laas\Client\DTO\GlovoAuthDTO;
use Dots\Glovo\Laas\Client\Exceptions\GlovoException;
use Dots\Glovo\Laas\Client\Requests\AuthenticateRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\CancelOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\CreateOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\DTO\CreateOrderDTO;
use Dots\Glovo\Laas\Client\Requests\Orders\DTO\ValidateOrderDTO;
use Dots\Glovo\Laas\Client\Requests\Orders\GetOrderCourierContactRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\GetOrderCourierPositionRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\GetOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\Simulate\SimulateFailedDeliveryRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\Simulate\SimulateSuccessfulDeliveryRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\ValidateOrderRequest;
use Dots\Glovo\Laas\Client\Requests\Orders\WorkingAreaRequest;
use Dots\Glovo\Laas\Client\Requests\Webhooks\DeleteWebhookRequest;
use Dots\Glovo\Laas\Client\Requests\Webhooks\DTO\RegisterWebhookDTO;
use Dots\Glovo\Laas\Client\Requests\Webhooks\GetWebhooksListRequest;
use Dots\Glovo\Laas\Client\Requests\Webhooks\RegisterWebhookRequest;
use Dots\Glovo\Laas\Client\Requests\Webhooks\Simulate\SimulateWebhookRequest;
use Dots\Glovo\Laas\Client\Responses\GlovoOAuthResponse;
use Dots\Glovo\Laas\Client\Responses\OrderCourierContactResponseDTO;
use Dots\Glovo\Laas\Client\Responses\OrderCourierPositionResponseDTO;
use Dots\Glovo\Laas\Client\Responses\OrderResponseDTO;
use Dots\Glovo\Laas\Client\Responses\ValidateOrderResponseDTO;
use Dots\Glovo\Laas\Client\Responses\WebhookResponseDTO;
use Dots\Glovo\Laas\Client\Responses\WebhooksListResponseDTO;
use RuntimeException;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class GlovoConnector extends Connector
{
    use AlwaysThrowOnErrors;

    private const BASE_PROD_URL = 'https://api.glovoapp.com';
    private const BASE_STAGE_URL = 'https://stageapi.glovoapp.com';

    public function __construct(
        private readonly GlovoAuthDTO $authDto,
        private readonly bool $stageEnv = true,
    ) {
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function validateOrder(ValidateOrderDTO $dto): ValidateOrderResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new ValidateOrderRequest($dto))->dto();
    }

    public function workingArea(): array
    {
        $this->authenticateRequests();
        return $this->send(new WorkingAreaRequest())->dto();
    }

    /**
     * @throws GlovoException
    */
    public function createOrder(CreateOrderDTO $dto): OrderResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new CreateOrderRequest($dto, $this->stageEnv))->dto();
    }

    public function getOrder(string $trackingNumber): OrderResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new GetOrderRequest($trackingNumber))->dto();
    }

    public function getOrderCourierContact(string $trackingNumber): OrderCourierContactResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new GetOrderCourierContactRequest($trackingNumber))->dto();
    }

    public function getOrderCourierPosition(string $trackingNumber): OrderCourierPositionResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new GetOrderCourierPositionRequest($trackingNumber))->dto();
    }

    public function cancelOrder(string $trackingNumber): void
    {
        $this->authenticateRequests();
        $this->send(new CancelOrderRequest($trackingNumber));
    }

    public function simulateSuccessfulDelivery(string $trackingNumber): void
    {
        $this->assertIsStagingEnv();
        $this->authenticateRequests();
        $this->send(new SimulateSuccessfulDeliveryRequest($trackingNumber));
    }

    public function simulateFailedDelivery(string $trackingNumber): void
    {
        $this->assertIsStagingEnv();
        $this->authenticateRequests();
        $this->send(new SimulateFailedDeliveryRequest($trackingNumber));
    }

    public function getWebhooks(): WebhooksListResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new GetWebhooksListRequest())->dto();
    }

    public function registerWebhook(RegisterWebhookDTO $dto): WebhookResponseDTO
    {
        $this->authenticateRequests();
        return $this->send(new RegisterWebhookRequest($dto))->dto();
    }

    public function deleteWebhook(int $webhookId): void
    {
        $this->authenticateRequests();
        $this->send(new DeleteWebhookRequest($webhookId))->dto();
    }

    public function simulateWebhook(int $webhookId): void
    {
        $this->assertIsStagingEnv();
        $this->authenticateRequests();
        $this->send(new SimulateWebhookRequest($webhookId))->dto();
    }

    private function authenticateRequests(): void
    {
        $oauth = $this->getAccessToken();
        $this->withTokenAuth($oauth->getAccessToken());
    }

    public function getAccessToken(): GlovoOAuthResponse
    {
        return $this->send(new AuthenticateRequest(
            $this->authDto,
        ))->dto();
    }

    public function resolveBaseUrl(): string
    {
        if ($this->stageEnv) {
            return self::BASE_STAGE_URL;
        }

        return self::BASE_PROD_URL;
    }

    private function assertIsStagingEnv(): void
    {
        if (!$this->isStageEnv()) {
            throw new RuntimeException('This method is only available in staging environment');
        }
    }

    public function isStageEnv(): bool
    {
        return $this->stageEnv;
    }

    public function getAuthDTO(): GlovoAuthDTO
    {
        return $this->authDto;
    }

}
