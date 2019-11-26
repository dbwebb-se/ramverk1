<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class CControllerTest extends TestCase
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

        $this->di = $di;

        // Setup the controller
        $this->controller = new CController();
        $this->controller->setDI($this->di);
    }



    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Mumin", $body);
    }



    /**
     * Test the route "di".
     */
    public function testDiAction()
    {
        $res = $this->controller->diAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Mumin", $body);
    }



    /**
     * Test the route "dicfg".
     */
    public function testDicfgAction()
    {
        $res = $this->controller->dicfgAction();
        $body = $res->getBody();
        $this->assertStringContainsString("Mumin says hi", $body);
    }
}
