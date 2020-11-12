<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Users\FUsers;

/**
 * A test controller to show off using a model.
 */
class FController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    protected $userContainer = null;



    public function initialize()
    {
        $this->userContainer = new FUsers();
    }



    public function indexAction()
    {
        $users = $this->userContainer->getUser(1);

        $data = [
            "content" => json_encode($users, JSON_PRETTY_PRINT),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "F",
        ]);
    }
}
