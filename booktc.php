<?php

include("data_class.php");

$Testing_Date=$_POST['Testing_Date'];
$Testing_Slot=$_POST['Testing_Slot'];
$T_Centre_ID=$_POST['T_Centre_ID'];


$obj=new data();
$obj->setconnection();
$obj->booktc($Testing_Date,$Testing_Slot,$T_Centre_ID);
