<?php

include("data_class.php");

$Name=$_POST['Name'];
$State=$_POST['State'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode'];


$obj=new data();
$obj->setconnection();
$obj->addtc($Name,$State,$City,$Pincode);
