<?php
/**
 * Description of UploadMenuRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Catalog;

use Dots\Glovo\Laas\Client\Requests\BaseGlovoRequest;
use Dots\Glovo\Laas\Client\Requests\Catalog\DTO\UploadMenuDTO;

/**
 * Before creating an order, you can use this endpoint to validate if it can be executed.
 * This validation process ensures that the relevant city is available and
 * that the pickup time falls within the active time of the platform.
 *
 * This endpoint geolocates a point based on the address provided in the rawAddress field.
 * The coordinates field is optional and can be used to provide more accurate geolocation information.
 * However, if coordinates are provided, they will take precedence over rawAddress in determining the location of the point.
 */
class VerifyMenuUploadRequest extends BaseGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu/%s';

    public function __construct(
        protected readonly UploadMenuDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }
}
