<?php

include("data_class.php");

$V_Centre_ID=$_POST['V_Centre_ID'];


$obj=new data();
$obj->setconnection();
$obj->removevc($V_Centre_ID);
