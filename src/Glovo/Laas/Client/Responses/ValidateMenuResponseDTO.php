<?php
/**
 * Description of ValidateMenuResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

class ValidateMenuResponseDTO extends GlovoResponseDTO
{
    protected bool $valid;

    protected array $errors;

    protected array $warnings;

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getWarnings(): array
    {
        return $this->warnings;
    }
}
