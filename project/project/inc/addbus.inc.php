<?php

if (isset($_POST["addbuss"])){

    $bodyno = $_POST["bodyno"];
    $busplate = $_POST["busplate"];
    $chasisno = $_POST["chasisno"];
    $seatcapacity = $_POST["seatcapacity"];
    $CompID = $_POST["CompID"];
  

    require_once '../config/dbcon.php';
    require_once 'functions.inc.php';
    
  
    addbus($conn, $bodyno, $busplate, $chasisno, $seatcapacity, $CompID);
  
  }
  else{
    header("location:../wew.php");
      exit();
  }
  