<?php
/**
 * Description of GlovoPartnerAuthDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\DTO;

use Dots\Data\DTO;

class GlovoPartnerAuthDTO extends DTO
{
    protected string $token;

    public static function make(string $token): self
    {
        return self::fromArray([
            'token' => $token,
        ]);
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
