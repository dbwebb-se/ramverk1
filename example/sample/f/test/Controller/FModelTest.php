<?php

namespace Anax\Users;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class FModelTest extends TestCase
{
    // Create the di container.
    protected $di;

    // Hold the model class.
    protected $model;



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
        $this->model = new FUsers();
        // Inject $di if the model class uses it
    }



    /**
     * Test getting the user with id 1.
     */
    public function testGettingUserId1()
    {
        $res = $this->model->getUser(1);
        $this->assertArrayHasKey("lastName", $res);
        $this->assertEquals("Allison", $res["lastName"]);
    }



    /**
     * Data provider for users.
     */
    public function providerUserId()
    {
        return [
            [1, "Allison"],
            [2, "Collinsworth"],
            [3, "Uzzle"],
        ];
    }



    /**
     * Test getting the user froma provider generator.
     *
     * @dataProvider providerUserId
     */
    public function testGettingUserIdFromProvider($id, $lastname)
    {
        $res = $this->model->getUser($id);
        $this->assertArrayHasKey("lastName", $res);
        $this->assertEquals($lastname, $res["lastName"]);
    }
}
