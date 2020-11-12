<?php

namespace Anax\Users;

/**
 * A mock class.
 */
class FUsersMock extends FUsers
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function doCurl(string $url) : string
    {
        $data = <<<EOD
        {
            "data": [
                {
                    "id": 1,
                    "firstName": "Phuong",
                    "lastName": "Allison"
                },
                {
                    "id": 2,
                    "firstName": "Marie",
                    "lastName": "Collinsworth"
                },
                {
                    "id": 3,
                    "firstName": "Simon",
                    "lastName": "Uzzle"
                },
                {
                    "id": 4,
                    "firstName": "Faustina",
                    "lastName": "Byfield"
                },
                {
                    "id": 5,
                    "firstName": "Robbie",
                    "lastName": "Perdue"
                },
                {
                    "id": 6,
                    "firstName": "Lue",
                    "lastName": "Lover"
                },
                {
                    "id": 7,
                    "firstName": "Etha",
                    "lastName": "Nolley"
                },
                {
                    "id": 8,
                    "firstName": "Jeremiah",
                    "lastName": "Lindauer"
                },
                {
                    "id": 9,
                    "firstName": "Coreen",
                    "lastName": "Olin"
                },
                {
                    "id": 10,
                    "firstName": "Josh",
                    "lastName": "Wayland"
                },
                {
                    "id": 11,
                    "firstName": "Soo",
                    "lastName": "Pullins"
                },
                {
                    "id": 12,
                    "firstName": "Shana",
                    "lastName": "Monty"
                }
            ],
            "offset": 0,
            "limit": 25,
            "total": 12
        }
        EOD;

        return $data;
    }
}
