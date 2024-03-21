<?php
/**
 * Description of AuthenicateRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests;

use Dots\Glovo\Laas\Client\DTO\GlovoAuthDTO;
use Dots\Glovo\Laas\Client\Responses\GlovoOAuthResponse;
use Saloon\Http\Response;

class AuthenticateRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/oauth/token';

    private const GRANT_TYPE_CREDENTIALS = 'client_credentials';

    public function __construct(
        private readonly GlovoAuthDTO $dto
    ) {
    }

    public function createDtoFromResponse(Response $response): GlovoOAuthResponse
    {
        return GlovoOAuthResponse::fromResponse($response);
    }

    public function defaultBody(): array
    {
        return [
            'clientId' => $this->dto->getClientId(),
            'clientSecret' => $this->dto->getClientSecret(),
            'grantType' => self::GRANT_TYPE_CREDENTIALS,
        ];
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }
}
