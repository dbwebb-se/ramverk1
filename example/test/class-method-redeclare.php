<?php declare(strict_types=1);
// @codingStandardsIgnoreStart

class Aaa
{
    public function method()
    {
        echo __METHOD__ . "\n";
    }
}

class Bbb extends Aaa
{
    public function method($var = null) : string
    {
        echo __METHOD__ . "\n";
        return "a string";
    }
}

$obj = new Bbb();
$obj->method();
