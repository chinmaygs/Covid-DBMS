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
    echo "<div class='alert alert-success' role='alert'>Succcessfully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="images/logo.jpeg"/></div>
            <div class="leftinnerdiv">
                <Button class="greenbtn" onclick="openpart('vaccine_appointment')" > BOOK VACCINATION SLOTS</Button>
                <Button class="greenbtn" onclick="openpart('testing_appointment')" > BOOK TESTING SLOTS</Button>
                <Button class="greenbtn" onclick="openpart('vaccination_centre')" >VACCINATION CENTRES</Button>
                <Button class="greenbtn" onclick="openpart('Report')"> DOWNLOAD REPORT</Button>
                <Button class="greenbtn" onclick="openpart('Certificate')"> DOWNLOAD CERTIFICATE</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>

        

        <div class="rightinnerdiv">   
            <div id="Report" class="innerright portion" style="display:none">
            <Button class="greenbtn" >COVID TEST REPORT</Button>
            <form action="rep.php" method="post" enctype="multipart/form-data">
            <label>Benificiary_ID:</label><input type="text" name="Pincode"/></br>
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>
            </form>
            </div>
            </div>

        <div class="rightinnerdiv">   
            <div id="vaccination_centre" class="innerright portion" style="display:none">
            <Button class="greenbtn" >VACCINATION CENTRES</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getvc();
            $recordset=$u->getvc();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'>V_Centre_ID</th><th>Name</th><th>State</th><th>City</th><th>Pincode</th></th><th>Available_Capacity</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
                "<td>$row[0]</td>";
                $table.="<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>
            </div>
            </div>


        <div class="rightinnerdiv">   
            <div id="Certificate" class="innerright portion" style="display:none">
            <Button class="greenbtn" >VACCINATION CERTIFICATE</Button>
            <form action="cert.php" method="post" enctype="multipart/form-data">
            <label>Benificiary_ID:</label><input type="text" name="Pincode"/></br>
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>
            </form>
            </div>
            </div>

        <div class="rightinnerdiv">   
            <div id="testing_appointment" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Testing appointment</Button>
            <form action="booktc.php" method="post" enctype="multipart/form-data">
            <label>Test_Date:</label><input  type="date" name="Testing_Date"/></br>
            <div>Test_Slot:<input type="radio" name="Testing_Slot" value="morning"/>Morning<input type="radio" name="Testing_Slot" value="afternoon"/>Afternoon</div>
            <label>T_Centre_ID</label><input type="text" name="T_Centre_ID"/></br>
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
            <label>V_Centre_ID:</label><input  type="varchar" name="V_Centre_ID"/></br>
            <label>Appointment_Date:</label><input  type="date" name="Appointment_Date"/></br>
            <div>Vaccine_Type:<input type="radio" name="Vaccine_Type" value="covaxin"/> Covaxin<input type="radio" name="Vaccine_Type" value="covisheild"/>Covisheild<div style="margin-left:80px"><input type="radio" name="Vaccine_Type" value="sputnikv"/>Sputnik-V</div>
            </div>   
            <div>Appointment_Slot:<input type="radio" name="Appointment_Slot" value="morning"/>Morning<input type="radio" name="Appointment_Slot" value="afternoon"/>Afternoon<div style="margin-left:80px"><div style="margin-left:80px"><input type="radio" name="Appointment_Slot" value="evening"/>Evening</div>
            </div> 
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