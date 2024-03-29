<?php include("db.php");

class data extends db {

    function __construct() {
        // echo " constructor ";
        echo "</br></br>";
    }


    function bookvc($V_Centre_ID,$Appointment_Date,$Vaccine_Type,$Appointment_Slot){
        $this->V_Centre_ID=$V_Centre_ID;
        $this->Appointment_Date=$Appointment_Date;
        $this->Vaccine_Type=$Vaccine_Type;
        $this->Appointment_Slot=$Appointment_Slot;
        $q="INSERT INTO vaccine_appointment(Appointment_Date, Vaccine_Type, Appointment_Slot, V_Centre_ID)VALUES('$Appointment_Date','$Vaccine_Type','$Appointment_Slot','$V_Centre_ID')";

        if($this->connection->exec($q)) {
            header("Location:citizen_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function adminLogin($t1, $t2) {

        $q="SELECT * FROM admin where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: admin_dashboard.php?logid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }
    function citizenLogin($t1, $t2) {
        $q="SELECT * FROM citizen where Benificiary_ID='$t1' and AADHAR_NO='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: citizen_dashboard.php?userlogid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }
    function booktc($Testing_Date,$Testing_Slot,$T_Centre_ID){
        $this->Testing_Date=$Testing_Date;
        $this->Testing_Slot=$Testing_Slot;
        $this->T_Centre_ID=$T_Centre_ID;
        $q="INSERT INTO `testing appointment`(`Testing_ID`, `Testing_Date`, `Testing_Slot`, `T_Centre_ID`) VALUES ('','$Testing_Date','$Testing_Slot','$T_Centre_ID')";

        if($this->connection->exec($q)) {
            header("Location:citizen_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function addtc($Name,$State,$City,$Pincode){
        $this->Name=$Name;
        $this->State=$State;
        $this->City=$City;
        $this->Pincode=$Pincode;
        $q="INSERT INTO `testing centre`(`T_Centre_ID`, `Name`, `State`, `City`, `Pincode`) VALUES ('','$Name','$State','$City','$Pincode')";

        if($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function removetc($T_Centre_ID){
        $this->T_Centre_ID=$T_Centre_ID;

        $q="DELETE FROM `testing centre` WHERE T_Centre_ID='$T_Centre_ID'";

        if($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function addvc($Name,$State,$City,$Pincode,$Available_Capacity){
        $this->Name=$Name;
        $this->State=$State;
        $this->City=$City;
        $this->Pincode=$Pincode;
        $this->Available_Capacity=$Available_Capacity;
        $q="INSERT INTO `vaccination_centre`(`V_Centre_ID`, `Name`, `State`, `City`, `Pincode`, `Available_Capacity`) VALUES ('','$Name','$State','$City','$Pincode','$Available_Capacity')";

        if($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function removevc($V_Centre_ID){
        $this->V_Centre_ID=$V_Centre_ID;

        $q="DELETE FROM `vaccination_centre` WHERE V_Centre_ID='$V_Centre_ID'";

        if($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    
    }
    function getvc(){
        $q="SELECT * FROM vaccination_centre ";
        $data=$this->connection->query($q);
        return $data;
        
    }

}
