<?php
class class1
{
    public $num;
    function __construct()
    {
        $this->num = 10;
    }
}


$obj1 = new class1();
echo "<br>";
$obj1->num = 20;
echo $obj1->num;


///////////////////////////////////////////////////////////////

class class2
{
    protected $num2;
    function __construct()
    {
        $this->num2 = 30;
    }

    function getNum()
    {
        return $this->num2;
    }
}


$obj2 = new class2();
echo "<br>";
// accessing protected properties using getters
echo $obj2->getNum();



///////////////OR///////////////////////////////////////



class class3
{
    protected $num2;
    function __construct()
    {
        $this->num2 = 40;
    }
}

class class4 extends class3
{
    function getNum2()
    {
        return $this->num2;
    }
}

$obj3 = new class4();
echo "<br>";
// accessing protected properties using getters
echo $obj3->getNum2();


/////////////////////////////////////////////



class class5
{
    protected function getData()
    {
        echo "Hello1";
    }
}

class class6 extends class5
{
    function getData()
    {
        echo "Hello2";
    }
}


$obj4 = new class6();
echo "<br>";
echo $obj4->getData();


// same function in parent class was public and child class was public == assessable
// same function in parent class was protected and child class was public == assessable
// same function in parent class was protected and child class was protected != assessable
// same function in parent class was public and child class was protected != assessable