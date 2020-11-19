<?php

namespace Anax\Service;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * A service class that is injected with di.
 */
class G1Service implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    public function useService() : string
    {
        return "DI contains " . count($this->di->getServices()) . " services.";
    }
}
