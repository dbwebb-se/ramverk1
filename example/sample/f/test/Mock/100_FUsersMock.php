<?php

namespace Anax\Users;

/**
 * A mock class.
 */
class FUsersMock extends FUsers
{
    protected function doCurl(string $url) : string
    {
        //var_dump($url);
        $data = [];
        $data["/1"] = <<<EOD
        {
            "id": 1,
            "firstName": "Phuong",
            "lastName": "Allison"
        }
        EOD;

        $data["/2"] = <<<EOD
        {
            "id": 2,
            "firstName": "Marie",
            "lastName": "Collinsworth"
        }
        EOD;

        $data["/3"] = <<<EOD
        {
            "id": 3,
            "firstName": "Simon",
            "lastName": "Uzzle"
        }
        EOD;

        return $data[$url];
    }
}
