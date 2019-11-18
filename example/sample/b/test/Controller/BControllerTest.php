<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class BControllerTest extends TestCase
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
        $controller = new BController();
        $controller->setDI($this->di);

        // Test the controller action
        $res = $controller->indexAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Allison", $body);
    }



    /**
     * Test the route "curl".
     */
    public function testCurlAction()
    {
        // Setup the controller
        $controller = new BController();
        $controller->setDI($this->di);

        // Test the controller action
        $res = $controller->curlAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Collinsworth", $body);
    }



    /**
     * Test the route "mcurl".
     */
    public function testMultiCurlAction()
    {
        // Setup the controller
        $controller = new BController();
        $controller->setDI($this->di);

        // Test the controller action
        $res = $controller->mcurlAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Uzzle", $body);
        $this->assertStringContainsString("Byfield", $body);
        $this->assertStringContainsString("Perdue", $body);
    }
}
