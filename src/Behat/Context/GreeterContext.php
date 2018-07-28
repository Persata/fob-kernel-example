<?php

namespace App\Behat\Context;

use App\Greeter\Greeter;
use Behat\Behat\Context\Context;

/**
 * Class GreeterContext
 *
 * @package App\Behat\Context
 */
class GreeterContext implements Context
{
    /**
     * @var Greeter
     */
    private $greeter;

    /**
     * GreeterContext constructor.
     *
     * @param Greeter $greeter
     */
    public function __construct(Greeter $greeter)
    {
        $this->greeter = $greeter;
    }

    /**
     * @Given /^the greeter should say "([^"]*)"$/
     */
    public function theGreeterShouldSay(string $greeterMessage)
    {
        $this->greeter->setMessage($greeterMessage);
    }
}
