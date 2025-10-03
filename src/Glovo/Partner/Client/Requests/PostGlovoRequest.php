<?php
/**
 * Description of PostGlovoRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

abstract class PostGlovoRequest extends BaseGlovoRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;
}
