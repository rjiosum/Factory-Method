<?php declare(strict_types=1);

namespace App\Abstracts;


abstract class Logger
{
    protected $to;
    public function __construct($to)
    {
        $this->to = $to;
    }
    abstract public function log(string $message) : string;
}