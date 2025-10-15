<?php
/**
 * Description of PutGlovoRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

abstract class PutGlovoRequest extends BaseGlovoRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;
}
