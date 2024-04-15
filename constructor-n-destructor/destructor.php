<?php
class class2
{
    function __construct()
    {
        echo "Start";
    }

    function __destruct()
    {
        echo "end";
    }
}

$obj1 = new class2;
