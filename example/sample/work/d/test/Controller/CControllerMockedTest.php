<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class CControllerMockedTest extends TestCase
{
    // Hold the actual controller.
    protected $controller;



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

        // Set the mock as a service into $di (overwrite the exiting service)
        $di->setShared("mumin", "\Anax\Mumin\MuminMock");
        $di->setShared("mumincfg", "\Anax\Mumin\MuminMock");

        $this->di = $di;

        // Setup the controller
        $this->controller = new CController();
        $this->controller->setDI($this->di);
    }



    /**
     * Test the route "di" (using a mock class).
     */
    public function testDiAction()
    {
        $res = $this->controller->diAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Mumin mock", $body);
    }



    /**
     * Test the route "dicfg" (using a mock class).
     */
    public function testDicfgAction()
    {
        $res = $this->controller->dicfgAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Mumin mock", $body);
    }
}
