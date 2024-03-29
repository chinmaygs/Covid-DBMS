<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Citizen Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <style>
        .innerright,label {
    color:  grey;
    font-weight:bold;
}
.container,
.row,
.imglogo {
    margin:auto;
     
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 25px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color:  black;
}

.greenbtn {
    background-color:  grey;
    color: white; 
    width: 95%;
    height: 60px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: large;
}

th{
    background-color: grey;
    color: black;
}
td{
    background-color:  #d3d3d3;
    color: black;
}
td, a{
    color:black;
}
    </style>
    <body>

    <?php
   include("data_class.php");

$msg="";

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

if($msg=="done"){
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="images/logo.jpeg"/></div>
            <div class="leftinnerdiv">
            <Button class="greenbtn" onclick="openpart('register')" >REGISTER</Button>
                <a href="index.php"><Button class="greenbtn" > HOME</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="register" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >REGISTER</Button>
            <form action="index.php" method="post" enctype="multipart/form-data">
            <label>Name</label><input type="text" name="Pincode"/></br>
            <label>AADHAR NO</label><input type="text" name="Pincode"/></br>
            <label>DOB:</label><input  type="date" name="bookdetail"/></br>
            <label>gender</label><input type="radio" name="branch" value="other"/>Male<input type="radio" name="branch" value="other"/>Female<input type="radio" name="branch" value="other"/>Other</br>
            <label>State</label><input type="text" name="Pincode"/></br>
            <label>Phone NO</label><input type="text" name="Pincode"/></br>
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>
            </form>
            </div>
            </div>            

        </div>
        </div>
        

     
        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>
    </body>
</html>