<?php
/**
 * Description of UploadMenuResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses\Catalog;

use Dots\Glovo\Laas\Client\Responses\GlovoResponseDTO;

class UploadMenuResponseDTO extends GlovoResponseDTO
{
    protected string $transactionId;

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
}
