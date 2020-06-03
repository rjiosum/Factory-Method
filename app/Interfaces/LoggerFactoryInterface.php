<?php


namespace App\Interfaces;


interface LoggerFactoryInterface
{
    public static function notifier(string $notifier, string $to);
}