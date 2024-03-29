<?php

include("data_class.php");

$T_Centre_ID=$_POST['T_Centre_ID'];


$obj=new data();
$obj->setconnection();
$obj->removetc($T_Centre_ID);
