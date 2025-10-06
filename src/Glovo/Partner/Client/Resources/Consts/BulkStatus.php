<?php
/**
 * Description of BulkStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum BulkStatus: string
{
    case SUCCESS = 'SUCCESS';

    case PROCESSING = 'PROCESSING';

    case PARTIALLY_PROCESSED = 'PARTIALLY_PROCESSED';

    case NOT_PROCESSED = 'NOT_PROCESSED';

    case GLOVO_ERROR = 'GLOVO_ERROR';

    public static function fromResponse(string $value): self
    {
        return self::tryFrom($value) ?? self::GLOVO_ERROR;
    }
}
