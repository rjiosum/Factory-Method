<?php declare(strict_types=1);

use App\Factories\ElectronicLoggerFactory;
use App\Factories\SystemLoggerFactory;

require_once __DIR__.'/vendor/autoload.php';

$sms = ElectronicLoggerFactory::notifier("SMS", "07111111111");
echo $sms->log('Some useful message');

$email = ElectronicLoggerFactory::notifier("Email", "rj.iosum@gmail.com");
echo $email->log('Some useful message');

$file = SystemLoggerFactory::notifier('File', 'log-'.date('d-m-Y').'.txt');
echo $file->log('Some useful message');


$console = SystemLoggerFactory::notifier('Console', 'console');
echo $console->log('Some useful message');





