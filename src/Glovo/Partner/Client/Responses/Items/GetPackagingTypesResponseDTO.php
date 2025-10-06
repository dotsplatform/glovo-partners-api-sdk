<?php
/**
 * Description of GetPackagingTypesResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Responses\Items;

use Dots\Glovo\Partner\Client\Responses\GlovoResponseDTO;
use Dots\Glovo\Partner\Client\Resources\Items\PackagingTypes;

class GetPackagingTypesResponseDTO extends GlovoResponseDTO
{
    protected PackagingTypes $packaging_type;

    public function getPackagingType(): PackagingTypes
    {
        return $this->packaging_type;
    }
}
