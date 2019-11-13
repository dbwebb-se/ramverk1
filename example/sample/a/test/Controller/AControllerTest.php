<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class AControllerTest extends TestCase
{
    // Create the di container.
    protected $di;



    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        $this->di = $di;
    }



    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        // Setup the controller
        $controller = new AController();
        $controller->setDI($this->di);

        // Test the controller action
        $res = $controller->indexAction();
        $body = $res->getBody();
        $this->assertContains("HELLO A", $body);
    }



    /**
     * Test the route "redirect".
     */
    public function testRedirectAction()
    {
        // Setup the controller
        $controller = new AController();
        $controller->setDI($this->di);

        // Test the controller action
        $res = $controller->redirectAction();
        $this->assertInstanceOf("Anax\Response\Response", $res);
        $this->assertInstanceOf("Anax\Response\ResponseUtility", $res);
    }
}
