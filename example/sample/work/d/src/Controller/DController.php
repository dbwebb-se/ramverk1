<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\D\D;

/**
 * A test controller to show off using a (model) class ($di service class.
 */
class DController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * Using D as a plain hardcoded class and inject $di as dependency
     * through the constructor, constructor injection.
     */
    public function indexAction()
    {
        $obj = new D($this->di);
        $message = $obj->getMessage();

        $data = [
            "content" => "D, hardcoded use of model class.\nModel says:\n \"$message\".",
        ];

        // Prepare the page with views and render
        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "D - hardcoded use of model class",
        ]);
    }
}
