<?php declare(strict_types=1);

namespace App\Classes\Electronic;

use App\Abstracts\Logger;

class Email extends Logger
{
    protected $from;

    public function __construct(string $to, string $from)
    {
        parent::__construct($to);

        if (isset($from)) {
            $this->from = $from;
        } else {
            $this->from = 'Anonymous';
        }
    }

    public function validate(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);
        return $isEmail ? true : false;
    }

    public function log(string $message): string
    {
        if (!$this->validate()) {
            throw new \InvalidArgumentException(
                sprintf("%s is an invalid email address", $this->to)
            );
        }
        return 'This is an ' . get_class($this) . ' logged message - "' . $message . '" to ' . $this->to . ' from ' . $this->from . PHP_EOL;
    }
}