<?php
/**
 * Description of GlovoException.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Exceptions;

use Dots\Glovo\Partner\Client\Responses\ErrorResponseDTO;
use Exception;
use Throwable;

class GlovoException extends Exception
{
    public function __construct(
        private ErrorResponseDTO $errorResponseDTO,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getErrorResponseDTO(): ErrorResponseDTO
    {
        return $this->errorResponseDTO;
    }
}
