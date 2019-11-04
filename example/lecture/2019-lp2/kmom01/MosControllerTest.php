<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class MosControllerTest extends TestCase
{
    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $controller = new MosController();
        $controller->initialize();
        $res = $controller->indexAction();
        $this->assertContains("db is active", $res);
    }



    /**
     * Test the route "info".
     */
    public function testJsonActionGet()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        // Setup the controller
        $controller = new MosController();
        $controller->setDI($di);
        $controller->initialize();

        // Test the controller action
        $res = $controller->jsonActionGet();
        $this->assertIsArray($res);
        //var_dump($res);
        $this->assertArrayHasKey("message", $res[0]);
        $this->assertContains("di contains", $res[0]["message"]);
        $this->assertArrayHasKey("di", $res[0]);
        $this->assertContains("configuration", $res[0]["di"]);
        $this->assertContains("request", $res[0]["di"]);
        $this->assertContains("response", $res[0]["di"]);
    }



    /**
     * Test the route "dump-di".
     */
    public function testDumpDiActionGet()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        // Test the controller action

        // Setup the controller
        $controller = new MosController();
        $controller->setDI($di);
        $controller->initialize();

        // Do the test and assert it
        $res = $controller->pageActionGet();
        $this->assertIsObject($res);
        $this->assertInstanceOf("Anax\Response\Response", $res);
        $this->assertInstanceOf("Anax\Response\ResponseUtility", $res);

        // Check that the body contains some known word
        $body = $res->getBody();
        //var_dump($body);
        $this->assertContains("HELLO", $body);
    }
}
