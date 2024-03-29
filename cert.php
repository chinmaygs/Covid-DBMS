<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Citizen Dashboard</title>
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
            <Button class="greenbtn" onclick="openpart('vaccination_centre')" >SEARCH VACCINATION CENTRES</Button>
                <Button class="greenbtn" onclick="openpart('vaccine_appointment')" > BOOK VACCINATION SLOTS</Button>
                <Button class="greenbtn" onclick="openpart('testing_appointment')"> BOOK TESTING SLOTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> DOWNLOAD CERTIFICATE</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="vaccination_centre" class="innerright portion" style="display:none">
            <Button class="greenbtn" >VACCINATION CENTRES</Button>
            <form action="vaccination_centres.php" method="post" enctype="multipart/form-data">
            <label>Pincode:</label><input type="text" name="Pincode"/></br>
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>

        <div class="rightinnerdiv">   
            <div id="vaccine_appointment" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Book Vaccination</Button>
            <form action="bvc.php" method="post" enctype="multipart/form-data">
            <label>Appointment_ID:</label><input type="text" name="bookname"/>
            </br>
            <label>Appointment_Date:</label><input  type="date" name="bookdetail"/></br>
            <div>Vaccine_Type:<input type="radio" name="branch" value="ISE"/> Covaxin<input type="radio" name="branch" value="ECE"/>Covisheild<div style="margin-left:80px"><input type="radio" name="branch" value="MECH"/>Sputnik-V</div>
            </div>   
            <div>Appointment_Slot:<input type="radio" name="branch" value="other"/>Morning<input type="radio" name="branch" value="ISE"/>Afternoon<div style="margin-left:80px"><div style="margin-left:80px"><input type="radio" name="branch" value="ECE"/>Evening</div>
            </div> 
            <label>V_Centre_ID:</label><input  type="number" name="bookprice"/>
            </br> </br>
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>

        <div class="rightinnerdiv">   
            <div id="testing_appointment" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Book Vaccination</Button>
            <form action="btc.php" method="post" enctype="multipart/form-data">
            <label>Appointment_ID:</label><input type="text" name="bookname"/>
            </br>
            <label>Appointment_Date:</label><input  type="date" name="bookdetail"/></br>
            <div>Vaccine_Type:<input type="radio" name="branch" value="ISE"/> Covaxin<input type="radio" name="branch" value="ECE"/>Covisheild<div style="margin-left:80px"><input type="radio" name="branch" value="MECH"/>Sputnik-V</div>
            </div>   
            <div>Appointment_Slot:<input type="radio" name="branch" value="other"/>Morning<input type="radio" name="branch" value="ISE"/>Afternoon<div style="margin-left:80px"><div style="margin-left:80px"><input type="radio" name="branch" value="ECE"/>Evening</div>
            </div> 
            <label>V_Centre_ID:</label><input  type="number" name="bookprice"/>
            </br> </br>
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