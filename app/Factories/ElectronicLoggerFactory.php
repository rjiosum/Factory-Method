<?php declare(strict_types=1);

namespace App\Factories;

use App\Classes\Electronic\Email;
use App\Classes\Electronic\Sms;
use App\Interfaces\LoggerFactoryInterface;
use Exception;

class ElectronicLoggerFactory implements LoggerFactoryInterface
{
    /**
     * @param $notifier
     * @param $to
     * @return Email|Sms
     * @throws Exception
     */
    public static function notifier(string $notifier, string $to)
    {
        if (empty($notifier)) {
            throw new Exception("Invalid notifier.");
        }
        switch ($notifier) {
            case 'SMS':
                return new Sms($to);
                break;
            case 'Email':
                return new Email($to, 'Raj');
                break;
            default:
                throw new Exception("Invalid Notifier.");
                break;
        }
    }
}