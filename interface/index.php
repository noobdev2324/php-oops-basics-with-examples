<?php
// Interface can only contain abstract function
// In Interface we can not define veriables
// No Constructor in Interface
// All Function must be public
// Interface support multiple inheritance

interface Interface1
{
    function test1();
}

interface Interface2
{
    function test2();
}

class MyClass implements Interface1, Interface2
{
    function test1()
    {
        echo "test 1 function";
    }

    function test2()
    {
        echo "test 2 function";
    }
}

$obj1 = new MyClass();
$obj1->test1();
$obj1->test2();
