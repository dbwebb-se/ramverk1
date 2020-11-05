<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * A sample controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class EController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * This is how a general helper method can be created in the controller.
     *
     * @param string $method as the method that handled the controller
     *                       action.
     * @param array  $args   as an array of arguments.
     *
     * @return string as a message to output to help understand how the
     *                controller method works.
     */
    public function getDetailsOnRequestData(
        string $method,
        array $args = []
    ) : array {
        $request     = $this->di->get("request");
        $router      = $this->di->get("router");

        return [
            "Controller action" => $method,
            "Controller mountpoint" => rtrim($router->getLastRoute(), "/"),
            "Path" => $request->getRoute(),
            "HTTP" => $request->getMethod(),
            "Num arguments" => count($args),
            "Arguments" => $args,
            "Query string" => $request->getGet(),
            "Body" => $request->getBodyAsJson(),
        ];
    }



    /**
     * This is the index method action, it handles:
     * ANY METHOD mountpoint
     * ANY METHOD mountpoint/
     * ANY METHOD mountpoint/index
     *
     * @return string
     */
    public function indexAction() : array
    {
        $data = $this->getDetailsOnRequestData(__METHOD__);
        return [$data, 400];
    }



    /**
     * Adding an optional catchAll() method will catch all actions sent to the
     * router. You can then reply with an actual response or return void to
     * allow for the router to move on to next handler.
     * A catchAll() handles the following, if a specific action method is not
     * created:
     * ANY METHOD mountpoint/**
     *
     * @param array $args as a variadic parameter.
     *
     * @return mixed
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function catchAll(...$args) : array
    {
        $data = $this->getDetailsOnRequestData(__METHOD__, $args);
        return [$data, 400];
    }
}
