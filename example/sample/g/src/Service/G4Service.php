<?php

namespace Anax\Service;

/**
 * A plain service class with no dependencies.
 */
class G4Service
{
    private $message = null;



    public function addMessage(string $message) : void
    {
        $this->message .= $message;
    }



    public function useService() : string
    {
        return "This service loads several messages from a config directory.<br>{$this->message}";
    }
}
