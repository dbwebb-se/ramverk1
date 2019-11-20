<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Mumin\Mumin;

/**
 * A test controller to show off using a $di service class.
 */
class CController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;


    /**
     * Using Mumin as a plain hardcoded class.
     */
    public function indexAction()
    {
        $mumin = new Mumin();

        $data = [
            "content" => $mumin->getDetails(),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "C - hardcoded",
        ]);
    }



    /**
     * Using "mumin" as a service in $di.
     */
    public function diAction()
    {
        $mumin = $this->di->get("mumin");

        $data = [
            "content" => $mumin->getDetails(),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "C - di",
        ]);
    }



    /**
     * Using "mumincfg" as a service in $di.
     */
    public function dicfgAction()
    {
        $mumin = $this->di->get("mumincfg");

        $data = [
            "content" => $mumin->getDetails(),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "C - di config",
        ]);
    }
}
