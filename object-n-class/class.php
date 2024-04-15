<?php
include "object.php";

$obj = new class1();
$obj2 = new class1();

$obj->fun1(); // 1
echo "<br>";
$obj->fun1(); // 2
echo "<br>";
echo $obj->x; // 3

echo "<br>";
$obj2->fun1(); // 1
