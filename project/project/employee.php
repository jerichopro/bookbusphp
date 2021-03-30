<?php
include_once dirname(__FILE__) . '/config/dbcon.php';
include_once dirname(__FILE__) . '/inc/session.php';

if(isset($_SESSION['user_data2'])) {
  if(isset($_SESSION['success'])){
  $show_message = $_SESSION['success'];
   $_SESSION['success'] = null;
 }
 if (isset($show_message)) {
 echo "<script>alert('{$show_message}');</script>";
 }
}
else {

   header('location:index.php');

}

 ?>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>Employee</h1>
     <a href = "logout.php" class = "logout_btn">Logout</a>
 </body>
 </html>