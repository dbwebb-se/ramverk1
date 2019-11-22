<?php

namespace Anax\Mumin;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Testclass.
 */
class MuminTest extends TestCase
{
    /**
     * Test getDetails
     */
    public function testGetDetails()
    {
        $mumin = new Mumin();
        $res = $mumin->getDetails();
        $this->assertStringContainsString("Mumin", $res);
    }



    /**
     * Test setMessage
     */
    public function testSetMessage()
    {
        $mumin = new Mumin();
        $mumin->setMessage("moped");
        $res = $mumin->getDetails();
        $this->assertStringContainsString("moped", $res);
    }
}
