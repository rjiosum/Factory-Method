<?php declare(strict_types=1);

namespace App\Classes\System;

use App\Abstracts\Logger;

class Console extends Logger
{
    /**
     * @param string $message
     * @return string
     */
    public function log(string $message): string
    {
        return 'This is an ' . get_class($this) . ' logged message - "' . $message . '" to ' . $this->to . PHP_EOL;
    }
}