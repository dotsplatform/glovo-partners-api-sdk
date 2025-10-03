<?php
/**
 * Description of UploadMenuDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests\Catalog\DTO;

use Dots\Data\DTO;

class UploadMenuDTO extends DTO
{
    protected string $menuUrl;

    public function getMenuUrl(): string
    {
        return $this->menuUrl;
    }
}
