<?php

if (isset($_POST["addemp"])){

    $Lname = $_POST["lname"];
    $Fname = $_POST["fname"];
    $Mname = $_POST["mi"];
    $position = $_POST["position"];
    $Email = $_POST["email"];
    $password = $_POST["password"]; 
    $roleid = $_POST["roleid"]; 
    $CompID = $_POST["CompID"]; 

  
    require_once '../config/dbcon.php';
    require_once 'functions.inc.php';
    
    if (invalidEmail($Email) !== false){
      header("location:../buscompany.php?error=invalidemail");
      exit();
    }
    if (uemailExist($conn, $Email) !== false){
      header("location:../buscompany.php?error=emailtaken");
      exit();
    }
    if (uemailExist1($conn, $Email) !== false){
      header("location:../buscompany.php?error=emailtaken");
      exit();
    }
    if (uemailExist2($conn, $Email) !== false){
      header("location:../buscompany.php?error=emailtaken");
      exit();
    }
    addemployee($conn, $Lname, $Fname, $Mname, $position, $Email, $password, $roleid, $CompID);
  
  }
  else{
    header("location:../wew.php");
      exit();
  }
  