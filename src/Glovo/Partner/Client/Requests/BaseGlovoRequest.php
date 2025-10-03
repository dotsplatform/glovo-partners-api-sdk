<?php
/**
 * Description of BaseGlovoRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

abstract class BaseGlovoRequest extends Request
{
    protected Method $method = Method::GET;
}
