<?php
/**
 * Description of GetPackagingTypesResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses\Items;

use Dots\Glovo\Laas\Client\Resources\Items\PackagingTypes;
use Dots\Glovo\Laas\Client\Responses\GlovoResponseDTO;

class GetPackagingTypesResponseDTO extends GlovoResponseDTO
{
    protected PackagingTypes $packaging_type;

    public function getPackagingType(): PackagingTypes
    {
        return $this->packaging_type;
    }
}
