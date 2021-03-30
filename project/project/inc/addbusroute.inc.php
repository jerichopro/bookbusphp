<?php

if (isset($_POST["addroute"])){

    $FromLocation = $_POST["FromLocation"];
    $ToLocation = $_POST["ToLocation"];
    $TimeTravel = $_POST["TimeTravel"];
    $DateTravel = $_POST["DateTravel"];
    $BusID = $_POST["BusID"];
    $EmpIDdriver = $_POST["EmpIDdriver"]; 
    $EmpIDconductor = $_POST["EmpIDconductor"]; 
    $FareAmount = $_POST["FareAmount"]; 
    $CompID = $_POST["CompID"]; 
  
    require_once '../config/dbcon.php';
    require_once 'functions.inc.php';
    
  
    addbusroute($conn, $FromLocation, $ToLocation, $TimeTravel, $DateTravel, $BusID, $EmpIDdriver, $EmpIDconductor, $FareAmount, $CompID);
  
  }
  else{
    header("location:../wew.php");
      exit();
  }
  