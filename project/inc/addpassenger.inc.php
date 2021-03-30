<?php

if (isset($_POST["register"])){

    $Lname = $_POST["lname"];
    $Fname = $_POST["fname"];
    $Mname = $_POST["mi"];
    $Email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];  
    $roleid = $_POST["roleid"]; 
    $isActive = $_POST["isActive"]; 
  
  
    require_once '../config/dbcon.php';
    require_once 'functions.inc.php';
    require_once 'session.php';
  
    // if (emptyInputRegister($Lname, $Fname, $Mname, $Email, $password, $mobile) !==false){
    //   header("location:../register.php?error=emptyInput");
    //   exit();
    // }
  
    if (invalidEmail($Email) !== false){
      header("location:../passenger.register.php?error=invalidemail");
      exit();
    }
    if (uemailExist($conn, $Email) !== false){
      header("location:../passenger.register.php?error=emailtaken");
      exit();
    }
    if (uemailExist1($conn, $Email) !== false){
      header("location:../passenger.register.php?error=emailtaken");
      exit();
    }
    if (uemailExist2($conn, $Email) !== false){
      header("location:../passenger.register.php?error=emailtaken");
      exit();
    }
  
  
    // if (regpwdMatch($N_pass, $N_passrep)!== false){
  
    //   header("location:../registration.php?error=passwordnotmatch");
    //   exit();
  
    // }
  
  
    createPassenger($conn, $Lname, $Fname, $Mname, $Email, $password, $mobile, $code, $status, $roleid, $isActive);
  
  }
  else{
    header("location:../passenger.register.php");
      exit();
  }
  