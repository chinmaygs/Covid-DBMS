<?php

include("data_class.php");

$Pincode=$_POST['Pincode'];


$obj=new data();
$obj->setconnection();
$obj->searchvc($Pincode);
