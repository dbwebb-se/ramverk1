<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Service\G1Service;

/**
 * A test controller to show off using a $di service class.
 */
class GController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;


    /**
     * Using a service directly and injecting its dependencies.
     */
    public function indexAction()
    {
        $service = new G1Service();
        $service->setDI($this->di);

        $data = [
            "content" => $service->useService(),
        ];

        return $this->di->get("page")
            ->add("anax/v2/plain/pre", $data)
            ->render(["title" => "G"]);
    }



    /**
     * Using a di-dependent service though $di.
     */
    public function g1serviceAction()
    {
        $service = $this->di->get("g1service");

        $data = [
            "content" => $service->useService(),
        ];

        return $this->di->get("page")
            ->add("anax/v2/plain/pre", $data)
            ->render(["title" => "G"]);
    }



    /**
     * Using a simple service though $di.
     */
    public function g2serviceAction()
    {
        $service = $this->di->get("g2service");

        $data = [
            "content" => $service->useService(),
        ];

        return $this->di->get("page")
            ->add("anax/v2/plain/pre", $data)
            ->render(["title" => "G"]);
    }



    /**
     * Using a configurable service though $di.
     */
    public function g3serviceAction()
    {
        $service = $this->di->get("g3service");

        $data = [
            "content" => $service->useService(),
        ];

        return $this->di->get("page")
            ->add("anax/v2/plain/pre", $data)
            ->render(["title" => "G"]);
    }



    /**
     * Using another configurable service though $di.
     */
    public function g4serviceAction()
    {
        $service = $this->di->get("g4service");

        $data = [
            "content" => $service->useService(),
        ];

        return $this->di->get("page")
            ->add("anax/v2/plain/pre", $data)
            ->render(["title" => "G"]);
    }
}
