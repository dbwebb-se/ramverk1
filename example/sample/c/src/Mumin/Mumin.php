<?php

namespace Anax\Mumin;

/**
 * A class to place as service in $di.
 */
class Mumin
{
    private $message = "Mumin";



    public function getDetails() : string
    {
        return $this->message;
    }



    public function setMessage($message) : void
    {
        $this->message = $message;
    }
}
