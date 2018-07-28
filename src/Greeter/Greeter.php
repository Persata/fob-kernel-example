<?php

namespace App\Greeter;

/**
 * Class Greeter
 *
 * @package App\Greeter
 */
class Greeter
{
    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Greeter
     */
    public function setMessage(string $message): Greeter
    {
        $this->message = $message;
        return $this;
    }
}
