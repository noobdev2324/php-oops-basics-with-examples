<?php
class class1
{
    public $num;
    function __construct()
    {
        $this->num = 10;
        // echo "Construct 1";
    }

    function fun1()
    {
        echo "Fun1";
    }
}


class class2 extends class1
{
    // if parent class __construct available, it will call parent parent __construct
    function __construct()
    {
        // echo "Construct 2";
        // but want to call parent __construct then 
        parent::__construct();
        $this->num = 20;
    }

    function fun1()
    {
        echo "Fun2";
    }
}


$obj2 = new class2();
echo "<br>";
echo $obj2->num;
