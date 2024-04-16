<?php
// same operation may be behave differently in different classes

abstract class class1
{
    abstract function fun1();
}

class class2 extends class1
{
    function fun1()
    {
        echo "Fun 1";
    }
}

class class3 extends class1
{
    function fun1()
    {
        echo "Fun 2";
    }
}

$obj1 = new class2();
$obj1->fun1();

$obj2 = new class3();
$obj2->fun1();



/////////////////////////////////////////////////////////
// USING INTERFACE



interface Interface1
{
    function fun2();
}

class Class5 implements Interface1
{
    function fun2()
    {
        echo "Fun 3";
    }
}

class Class6 implements Interface1
{
    function fun2()
    {
        echo "Fun 4";
    }
}

$obj3 = new Class5();
$obj3->fun2();

$obj4 = new Class6();
$obj4->fun2();
