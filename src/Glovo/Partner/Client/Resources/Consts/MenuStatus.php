<?php
/**
 * Description of MenuStatus.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Consts;

enum MenuStatus: string
{
    // The menu update process finished successfully
    case SUCCESS = 'SUCCESS';

    // The menu update process has not finished yet
    case PROCESSING = 'PROCESSING';

    // The menu update process finished with errors caused by invalid JSON input
    case FETCH_MENU_INVALID_PAYLOAD = 'FETCH_MENU_INVALID_PAYLOAD';

    // The menu update process finished with errors trying to download the menu from the partner URL (e.g. time-out, invalid URL, etc.)
    case FETCH_MENU_SERVER_ERROR = 'FETCH_MENU_SERVER_ERROR';

    // The menu update process finished with errors trying to download the menu from the partner URL (e.g. authorization errors)
    case FETCH_MENU_UNAUTHORIZED = 'FETCH_MENU_UNAUTHORIZED';

    // The menu update process finished with errors due to incorrect integration setup
    case NOT_PROCESSED = 'NOT_PROCESSED';

    // The maximum number of menu updates allowed per day per store address was exceeded
    case LIMIT_EXCEEDED = 'LIMIT_EXCEEDED';

    // The menu update process finished unsuccessfully due to an error in the Glovo system
    case GLOVO_ERROR = 'GLOVO_ERROR';

    // The menu update process finished with errors because the store associated to this store address doesn't have the schedule catalog feature enabled, but a schedule is being uploaded
    case SCHEDULE_CATALOG_DISABLED = 'SCHEDULE_CATALOG_DISABLED';

    public static function fromResponse(string $value): self
    {
        return self::tryFrom($value) ?? self::GLOVO_ERROR;
    }
}
