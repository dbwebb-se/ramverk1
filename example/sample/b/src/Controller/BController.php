<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Users\Users;

/**
 * A test controller to show off using a model.
 */
class BController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    public function indexAction()
    {
        $userContainer = new Users();
        $users = $userContainer->getUser(1);

        $data = [
            "content" => json_encode($users, JSON_PRETTY_PRINT),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "B",
        ]);
    }



    public function curlAction()
    {
        $userContainer = new Users();
        $users = $userContainer->getUserThroughCurl(2);

        $data = [
            "content" => json_encode($users, JSON_PRETTY_PRINT),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "B curl",
        ]);
    }



    public function mcurlAction()
    {
        $userContainer = new Users();
        $users = $userContainer->getUsersThroughMultiCurl([3, 4, 5]);

        $data = [
            "content" => json_encode($users, JSON_PRETTY_PRINT),
        ];

        $page = $this->di->get("page");
        $page->add("anax/v2/plain/pre", $data);
        return $page->render([
            "title" => "B mcurl",
        ]);
    }
}
