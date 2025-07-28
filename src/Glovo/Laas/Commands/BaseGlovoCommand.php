<?php
/**
 * Description of BaseGlovoCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Commands;

use Dots\Glovo\Laas\Client\DTO\GlovoAuthDTO;
use Dots\Glovo\Laas\Client\GlovoConnector;
use Illuminate\Console\Command;
use InvalidArgumentException;

abstract class BaseGlovoCommand extends Command
{
    protected function getGlovoConnector(): GlovoConnector
    {
        return app(GlovoConnector::class);
    }

    protected function assertIntValue(mixed $value): int
    {
        if (! is_numeric($value)) {
            throw new InvalidArgumentException('Value must be integer');
        }

        return (int) $value;
    }

    protected function assertStringValue(mixed $value): string
    {
        if (! is_string($value)) {
            throw new InvalidArgumentException('Value must be integer');
        }

        return $value;
    }
}
