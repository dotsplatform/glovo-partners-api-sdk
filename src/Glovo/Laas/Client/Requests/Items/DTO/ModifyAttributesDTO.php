<?php
/**
 * Description of UploadMenuDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Items\DTO;

use Dots\Data\DTO;

class ModifyAttributesDTO extends DTO
{
    protected string $menuUrl;

    public function getMenuUrl(): string
    {
        return $this->menuUrl;
    }
}
