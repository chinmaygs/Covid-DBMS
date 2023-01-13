<?php

include("data_class.php");

$login_email=$_GET['login_email'];
$login_pasword=$_GET['login_pasword'];

if($login_email==null||$login_pasword==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Enter Benificiary ID";
    }
    if($login_pasword==null){
        $pasdmsg="Enter AADHAR NO";
    }

    header("Location: index.php?emailmsg=$emailmsg&pasdmsg=$pasdmsg&msg=Register To Login");
}


elseif($login_email!=null&&$login_pasword!=null){
    $obj=new data();
    $obj->setconnection();
    $obj->citizenLogin($login_email,$login_pasword);

}
