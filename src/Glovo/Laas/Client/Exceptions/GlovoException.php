<?php
/**
 * Description of CreateGlovoOrderException.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Exceptions;

use Dots\Glovo\Laas\Client\Responses\ErrorResponseDTO;
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
