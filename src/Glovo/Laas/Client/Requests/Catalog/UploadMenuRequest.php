<?php
/**
 * Description of UploadMenuRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Catalog;

use Dots\Glovo\Laas\Client\Requests\Catalog\DTO\UploadMenuDTO;
use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;

class UploadMenuRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/webhook/stores/%s/menu';

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
