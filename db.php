<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=c_dbms","root","");
         echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
