<?php

include("data_class.php");

$V_Centre_ID=$_POST['V_Centre_ID'];
$Appointment_Date=$_POST['Appointment_Date'];
$Vaccine_Type=$_POST['Vaccine_Type'];
$Appointment_Slot=$_POST['Appointment_Slot'];


$obj=new data();
$obj->setconnection();
$obj->bookvc($V_Centre_ID,$Appointment_Date,$Vaccine_Type,$Appointment_Slot);
