<?php
/**
 * Description of GlovoPartnerConnector.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client;

use Dots\Glovo\Partner\Client\Exceptions\GlovoException;
use Dots\Glovo\Partner\Client\Responses\Catalog\UploadMenuResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Catalog\ValidateMenuResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Catalog\VerifyMenuUploadResponseDTO;
use Dots\Glovo\Partner\Client\Responses\ErrorResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Items\BulkUpdateItemsResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Items\GetPackagingTypesResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Items\ModifyAttributesResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Items\ModifyProductsResponseDTO;
use Dots\Glovo\Partner\Client\Responses\Items\VerifyBulkUpdateItemsStatusResponseDTO;
use Dots\Glovo\Partner\Client\DTO\GlovoPartnerAuthDTO;
use Dots\Glovo\Partner\Client\Requests\Catalog\DTO\UploadMenuDTO;
use Dots\Glovo\Partner\Client\Requests\Catalog\UploadMenuRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\ValidateMenuRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\VerifyMenuUploadRequest;
use Dots\Glovo\Partner\Client\Requests\Items\BulkUpdateItemsRequest;
use Dots\Glovo\Partner\Client\Requests\Items\DTO\BulkUpdateItemsDTO;
use Dots\Glovo\Partner\Client\Requests\Items\DTO\ModifyAttributesDTO;
use Dots\Glovo\Partner\Client\Requests\Items\DTO\ModifyProductsDTO;
use Dots\Glovo\Partner\Client\Requests\Items\GetPackagingTypesRequest;
use Dots\Glovo\Partner\Client\Requests\Items\ModifyAttributesRequest;
use Dots\Glovo\Partner\Client\Requests\Items\ModifyProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Items\VerifyBulkUpdateItemsStatusRequest;
use Dots\Glovo\Partner\Client\Resources\Catalog\Menu;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Throwable;

class GlovoPartnerConnector extends Connector
{
    use AlwaysThrowOnErrors;

    private const BASE_PROD_URL = 'https://menu-tool.glovoapp.com/partners-api/api';

    public function __construct(
        private readonly GlovoPartnerAuthDTO $authDto,
    ) {
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * @throws GlovoException
     */
    public function uploadMenu(string $storeId, UploadMenuDTO $dto): UploadMenuResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new UploadMenuRequest($storeId, $dto))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function verifyMenuUpload(string $storeId, string $transactionId): VerifyMenuUploadResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new VerifyMenuUploadRequest($storeId, $transactionId))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function validateMenu(Menu $dto): ValidateMenuResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new ValidateMenuRequest($dto))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function getPackagingTypes(string $storeId): GetPackagingTypesResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new GetPackagingTypesRequest($storeId))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function bulkUpdateItems(string $storeId, BulkUpdateItemsDTO $dto): BulkUpdateItemsResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new BulkUpdateItemsRequest($storeId, $dto))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function modifyProducts(string $storeId, string $productId, ModifyProductsDTO $dto): ModifyProductsResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new ModifyProductsRequest($storeId, $productId, $dto))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function modifyAttributes(string $storeId, string $attributeId, ModifyAttributesDTO $dto): ModifyAttributesResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new ModifyAttributesRequest($storeId, $attributeId, $dto))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function verifyBulkUpdateItemsStatus(string $storeId, string $transactionId): VerifyBulkUpdateItemsStatusResponseDTO
    {
        $this->authenticateRequests();

        return $this->send(new VerifyBulkUpdateItemsStatusRequest($storeId, $transactionId))->dto();
    }

    public function resolveBaseUrl(): string
    {
        return self::BASE_PROD_URL;
    }

    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        $errorResponse = ErrorResponseDTO::fromResponse($response);

        return new GlovoException($errorResponse);
    }

    private function authenticateRequests(): void
    {
        $oauth = $this->getAuthDTO();
        $this->withTokenAuth($oauth->getToken());
    }

    public function getAuthDTO(): GlovoPartnerAuthDTO
    {
        return $this->authDto;
    }
}
