<?php

namespace Anax\Controller;

use Anax\Users\FUsersMock;

/**
 * A mock class.
 */
class FControllerMock extends FController
{
    public function initialize()
    {
        parent::initialize();
        $this->userContainer = new FUsersMock();
    }
}
