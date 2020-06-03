<?php declare(strict_types=1);

namespace App\Classes\System;

use App\Abstracts\Logger;

class File extends Logger
{
    /**
     * @param string $message
     * @return string
     */
    public function log(string $message): string
    {
        file_put_contents('log/'.$this->to, $message . PHP_EOL, FILE_APPEND);
        return 'This is a ' . get_class($this) . ' logged message - "' . $message . '" to ' . $this->to . '.' . PHP_EOL;
    }
}