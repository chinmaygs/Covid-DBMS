<?php

include("data_class.php");

$Name=$_POST['Name'];
$State=$_POST['State'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode'];
$Available_Capacity=$_POST['Available_Capacity'];


$obj=new data();
$obj->setconnection();
$obj->addvc($Name,$State,$City,$Pincode,$Available_Capacity);
