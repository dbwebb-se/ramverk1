<?php

namespace Anax\Service;

/**
 * A plain service class with no dependencies.
 */
class G3Service
{
    private $message = null;



    public function setMessage(string $message) : void
    {
        $this->message = $message;
    }



    public function useService() : string
    {
        return "This service loads a message from the config file.<br>&gt; '{$this->message}'";
    }
}
