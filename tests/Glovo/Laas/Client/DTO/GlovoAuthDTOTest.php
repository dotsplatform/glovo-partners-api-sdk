<?php
/**
 * Description of GlovoAuthDTOTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests\Glovo\Laas\Client\DTO;

use Dots\Glovo\Laas\Client\DTO\GlovoAuthDTO;
use Tests\TestCase;

class GlovoAuthDTOTest extends TestCase
{
    /**
     * @dataProvider provideGlovoAuthDTOData
     */
    public function testMakeGlovoAuthDTO(string $clientId, string $clientSecret): void
    {
        $glovoAuthDTO = GlovoAuthDTO::make($clientId, $clientSecret);

        $this->assertEquals($clientId, $glovoAuthDTO->getClientId());
        $this->assertEquals($clientSecret, $glovoAuthDTO->getClientSecret());
    }

    /**
     * @dataProvider provideGlovoAuthDTOData
     */
    public function testFromArrayGlovoAuthDTO(string $clientId, string $clientSecret): void
    {
        $glovoAuthDTO = GlovoAuthDTO::fromArray([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
        ]);

        $this->assertEquals($clientId, $glovoAuthDTO->getClientId());
        $this->assertEquals($clientSecret, $glovoAuthDTO->getClientSecret());
    }

    /**
     * @dataProvider provideGlovoAuthDTOData
     */
    public function testFromArrayToArrayGlovoAuthDTO(string $clientId, string $clientSecret): void
    {
        $dto = GlovoAuthDTO::fromArray([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
        ]);
        $glovoAuthDTO = GlovoAuthDTO::fromArray($dto->toArray());

        $this->assertEquals($clientId, $glovoAuthDTO->getClientId());
        $this->assertEquals($clientSecret, $glovoAuthDTO->getClientSecret());
    }

    public static function provideGlovoAuthDTOData(): array
    {
        return [
            'valid data' => [
                'clientId' => 'testClientId',
                'clientSecret' => 'testClientSecret',
            ],
        ];
    }
}
