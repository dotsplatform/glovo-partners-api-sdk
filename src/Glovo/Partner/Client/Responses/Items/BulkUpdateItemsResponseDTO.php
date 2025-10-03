<?php
/**
 * Description of BulkUpdateItemsResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Responses\Items;

use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;

class BulkUpdateItemsResponseDTO extends GlovoResponseDTO
{
    protected string $transactionId;

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
}
