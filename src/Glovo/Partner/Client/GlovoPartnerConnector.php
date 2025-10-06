<?php
/**
 * Description of GlovoPartnerConnector.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client;

use Dots\Glovo\Partner\Client\DTO\GlovoPartnerAuthDTO;
use Dots\Glovo\Partner\Client\Exceptions\GlovoException;
use Dots\Glovo\Partner\Client\Requests\Catalog\Collections\DeleteCollectionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Collections\GetCollectionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Collections\StoreCollectionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Options\DeleteGroupOptionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Options\DeleteOptionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Options\GetOptionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Options\StoreOptionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Products\BulkUpdateProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Products\DeleteGroupProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Products\DeleteProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Products\GetProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\Products\StoreProductsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\SuperCollections\DeleteSuperCollectionRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\SuperCollections\GetSuperCollectionsRequest;
use Dots\Glovo\Partner\Client\Requests\Catalog\SuperCollections\StoreSuperCollectionsRequest;
use Dots\Glovo\Partner\Client\Requests\StoreAddresses\ClearAllDataRequest;
use Dots\Glovo\Partner\Client\Resources\Catalog\BulkUpdateProductDTOs;
use Dots\Glovo\Partner\Client\Resources\Catalog\CollectionDTOs;
use Dots\Glovo\Partner\Client\Resources\Catalog\OptionDTO;
use Dots\Glovo\Partner\Client\Resources\Catalog\OptionDTOs;
use Dots\Glovo\Partner\Client\Resources\Catalog\ProductDTOs;
use Dots\Glovo\Partner\Client\Resources\Catalog\SuperCollectionDTOs;
use Dots\Glovo\Partner\Client\Responses\ErrorResponseDTO;
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

    public function resolveBaseUrl(): string
    {
        return self::BASE_PROD_URL;
    }

    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        $errorResponse = ErrorResponseDTO::fromResponse($response);

        return new GlovoException($errorResponse);
    }

    /**
     * @throws GlovoException
     */
    public function deleteCollections(string $storeId, string $collectionId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteCollectionsRequest($storeId, $collectionId));
    }

    /**
     * @throws GlovoException
     */
    public function storeCollections(string $storeId, CollectionDTOs $collections): void
    {
        $this->authenticateRequests();

        $this->send(new StoreCollectionsRequest($storeId, $collections));
    }

    /**
     * @throws GlovoException
     */
    public function getCollections(string $storeId): CollectionDTOs
    {
        $this->authenticateRequests();

        return $this->send(new GetCollectionsRequest($storeId))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function deleteSuperCollections(string $storeId, string $superCollectionId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteSuperCollectionRequest($storeId, $superCollectionId));
    }

    /**
     * @throws GlovoException
     */
    public function storeSuperCollections(string $storeId, SuperCollectionDTOs $superCollections): void
    {
        $this->authenticateRequests();

        $this->send(new StoreSuperCollectionsRequest($storeId, $superCollections));
    }

    /**
     * @throws GlovoException
     */
    public function getSuperCollections(string $storeId): CollectionDTOs
    {
        $this->authenticateRequests();

        return $this->send(new GetSuperCollectionsRequest($storeId))->dto();
    }

    public function deleteGroupProducts(string $storeId, string $groupId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteGroupProductsRequest($storeId, $groupId));
    }

    public function deleteProducts(string $storeId, string $groupId, string $productId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteProductsRequest($storeId, $groupId, $productId));
    }

    /**
     * @throws GlovoException
     */
    public function storeProducts(string $storeId, ProductDTOs $products): void
    {
        $this->authenticateRequests();

        $this->send(new StoreProductsRequest($storeId, $products));
    }

    /**
     * @throws GlovoException
     */
    public function getProducts(string $storeId): ProductDTOs
    {
        $this->authenticateRequests();

        return $this->send(new GetProductsRequest($storeId))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function bulkUpdateProducts(string $storeId, BulkUpdateProductDTOs $dto): ProductDTOs
    {
        $this->authenticateRequests();

        return $this->send(new BulkUpdateProductsRequest($storeId, $dto))->dto();
    }

    public function deleteGroupOptions(string $storeId, string $groupId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteGroupOptionsRequest($storeId, $groupId));
    }

    public function deleteOptions(string $storeId, string $groupId, string $optionId): void
    {
        $this->authenticateRequests();

        $this->send(new DeleteOptionsRequest($storeId, $groupId, $optionId));
    }

    /**
     * @throws GlovoException
     */
    public function storeOptions(string $storeId, OptionDTOs $options): void
    {
        $this->authenticateRequests();

        $this->send(new StoreOptionsRequest($storeId, $options));
    }

    /**
     * @throws GlovoException
     */
    public function getOptions(string $storeId): OptionDTO
    {
        $this->authenticateRequests();

        return $this->send(new GetOptionsRequest($storeId))->dto();
    }

    /**
     * @throws GlovoException
     */
    public function clearAllData(string $storeId): void
    {
        $this->authenticateRequests();

        $this->send(new ClearAllDataRequest($storeId));
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
