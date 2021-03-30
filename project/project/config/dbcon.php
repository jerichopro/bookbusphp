<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project";
$errors   = array(); 

 $conn = Mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

 if (!$conn){
   die("Connection failed" . Mysqli_connect_error());
 }
