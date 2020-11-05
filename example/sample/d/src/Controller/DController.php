<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class DController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * @var string $db a sample member variable that gets initialised
     */
    private $db = "not active";



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
    public function getDetailsOnRequest(
        string $method,
        array $args = []
    ) : string {
        $request     = $this->di->get("request");
        $router      = $this->di->get("router");
        $path        = $request->getRoute();
        $httpMethod  = $request->getMethod();
        $mount       = rtrim($router->getLastRoute(), "/");
        $numArgs     = count($args);
        $strArgs     = implode(", ", $args);
        $queryString = http_build_query($request->getGet(), '', ', ');

        return <<<EOD
            <h1>$method</h1>

            <p>The controller mountpoint is '$mount'.
            <p>The request was '$path' ($httpMethod).
            <p>Got '$numArgs' arguments: '$strArgs'.
            <p>Query string contains: '$queryString'.
            <p>\$db is '{$this->db}'.
        EOD;
    }



    /**
     * The initialize method is optional and will always be called before the
     * target method/action. This is a convienient method where you could
     * setup internal properties that are commonly used by several methods.
     *
     * @return void
     */
    public function initialize() : void
    {
        // Use to initialise member variables.
        $this->db = "active";
    }



    /**
     * This is the index method action, it handles:
     * ANY METHOD mountpoint
     * ANY METHOD mountpoint/
     * ANY METHOD mountpoint/index
     *
     * @return string
     */
    public function indexAction() : object
    {
        $page = $this->di->get("page");
        $data = [
            "content" => $this->getDetailsOnRequest(__METHOD__),
        ];
        $page->add("anax/v2/article/default", $data);

        return $page->render([
            "title" => __METHOD__,
        ]);
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
    public function catchAll(...$args)
    {
        $page = $this->di->get("page");
        $data = [
            "content" => $this->getDetailsOnRequest(__METHOD__, $args),
        ];
        $page->add("anax/v2/article/default", $data);

        return $page->render([
            "title" => __METHOD__,
        ]);
    }
}
