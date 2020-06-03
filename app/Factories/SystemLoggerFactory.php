<?php declare(strict_types=1);

namespace App\Factories;

use App\Classes\System\Console;
use App\Classes\System\File;
use App\Interfaces\LoggerFactoryInterface;
use Exception;

class SystemLoggerFactory implements LoggerFactoryInterface
{
    /**
     * @param $notifier
     * @param $to
     * @return File|Console
     * @throws Exception
     */
    public static function notifier(string $notifier, string $to)
    {
        if (empty($notifier)) {
            throw new Exception("Invalid notifier.");
        }
        switch ($notifier) {
            case 'File':
                return new File($to);
                break;
            case 'Console':
                return new Console($to);
                break;
            default:
                throw new Exception("Invalid Notifier.");
                break;
        }
    }
}