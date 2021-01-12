<?php declare(strict_types=1);

class A
{
    function m1()
    {
        echo __METHOD__ . "\n";
    }
}

class B extends A
{
    function m1($a = null) : string
    {
        echo __METHOD__ . "\n";
        return "a string";
    }
}

$obj = new B();
$obj->m1();
