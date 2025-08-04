<?php
/**
 * Description of VerifyBulkUpdateItemsStatusResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses\Items;

use Dots\Glovo\Laas\Client\Resources\Consts\BulkStatus;
use Dots\Glovo\Laas\Client\Responses\GlovoResponseDTO;

class VerifyBulkUpdateItemsStatusResponseDTO extends GlovoResponseDTO
{
    protected string $transactionId;

    protected BulkStatus $status;

    protected string $last_updated_at;

    protected array $details;

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function getStatus(): BulkStatus
    {
        return $this->status;
    }

    public function getLastUpdatedAt(): string
    {
        return $this->last_updated_at;
    }

    public function getDetails(): array
    {
        return $this->details;
    }
}
