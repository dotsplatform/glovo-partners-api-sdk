<?php
/**
 * Description of GlovoDateTimeTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests\Glovo\Laas\Client\Resources;

use DateTime;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;
use Tests\TestCase;

class GlovoDateTimeTest extends TestCase
{
    public static function getProvideGlovoDateTimeTestData(): array
    {
        return [
            'valid datetime string' => [
                '2023-05-13T13:21:22Z',
                '2023-05-13T13:21:22+00:00',
                (new DateTime('2023-05-13T13:21:22Z'))->getTimestamp(),
            ],
        ];
    }

    public static function getProvideGlovoDateTimeFromTimestampTestData(): array
    {
        return [
            'valid timestamp' => [
                1704067200, // 2023-01-01T00:00:00Z
                '2024-01-01T00:00:00+00:00',
            ],
        ];
    }

    /**
     * @dataProvider getProvideGlovoDateTimeTestData
     */
    public function testGlovoDateTime(string $inputDate, string $expectedDateString, int $expectedTimestamp): void
    {
        $glovoDateTime = GlovoDateTime::fromString($inputDate);

        $this->assertEquals($expectedDateString, $glovoDateTime->__toString());
        $this->assertEquals($expectedTimestamp, $glovoDateTime->getTimestamp());
    }

    /**
     * @dataProvider getProvideGlovoDateTimeFromTimestampTestData
     */
    public function testGlovoDateTimeFromTimestamp(int $timestamp, string $expectedDateString): void
    {
        $glovoDateTime = GlovoDateTime::fromTimestamp($timestamp);

        $this->assertEquals($expectedDateString, $glovoDateTime->__toString());
    }
}
