<?php declare(strict_types=1);

namespace App\Classes\Electronic;

use App\Abstracts\Logger;

class Sms extends Logger
{
    /**
     * @return bool
     */
    public function validate(): bool
    {
        $pattern = '/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/';
        $isPhone = preg_match($pattern, $this->to);
        return $isPhone ? true : false;
    }

    /**
     * @param string $message
     * @return string
     */
    public function log(string $message): string
    {
        if (!$this->validate()) {
            throw new \InvalidArgumentException(
                sprintf("%s is an invalid phone number.", $this->to)
            );
        }
        return 'This is a ' . get_class($this) . ' logged message - "' . $message . '" to ' . $this->to . '.' . PHP_EOL;
    }
}