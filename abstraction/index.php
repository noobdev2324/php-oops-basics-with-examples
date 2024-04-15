<?php
// abstract class contain atleast 1 abstract function
// must declare but not implemet
// Cloud not create Object
// child class must contain abstract function

abstract class bank
{
    abstract function kyc_verification();
}

class StateBank extends bank
{
    function kyc_verification()
    {
        echo "verified";
    }
}

class CentralBank extends bank
{
    function kyc_verification()
    {
        echo "not verified";
    }
}

class HDFCBank extends bank
{
    function kyc_verification()
    {
        echo "not verified";
    }
}


$obj1 = new StateBank();
echo $obj1->kyc_verification();
$obj1 = new CentralBank();
echo $obj1->kyc_verification();
$obj1 = new HDFCBank();
echo $obj1->kyc_verification();
