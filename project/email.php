<?php
    include_once dirname(__FILE__) . '/config/dbcon.php';
    include_once dirname(__FILE__) . '/inc/session.php';

    if(isset($_SESSION['user_reg1'])) {
       
    }
    else {
      header('location:index.php');
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="assets/materialize.min.css"  media="screen,projection"/>   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

  <title>Verify</title>

</head>

<body>

<div class="" style="padding-left: 20%; padding-right: 20%; padding-top: 5%;">
<div class="card col s6 m6 l4 center " >
<br>
    <h3><?php    echo "".$_SESSION['user_reg1']; ?></h3>
    <div class="divider white-text"></div>
    <div class="alert red-text">
     <?php

      if (isset($_GET["error"])){
        if ($_GET["error"]== "invalidcode"){


    echo " <strong>INVALID CODE!</strong><br>";


    }
    if ($_GET["error"]== "emptyInput"){
      echo " <br><strong>EMPTY TEXTFIELD!</strong><br>";
}
} ?>



    <h2 class="black-text"id="Verify">Verification Code </h2>


      <form action="inc/email.inc.php" method="post">
      <div class="input-field col s12 m6 l2 center">
      <input type="text" class="center"  name="otp" id="verify" placeholder="Enter Code Here"  onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
     
      </div>
      <input type="submit" class="btn waves-effect waves-teal" name ="check" value="Submit" id="verify-form-submit">
      <h6 class=" "> Cancel?  <a href="logout.php"><span> click here <span></span></span></a></h6>
      </form>
      </div>
      </div>
      </div>
</body>


<script type="text/javascript" src="assets/materialize.min.js"></script>
<script type="text/javascript" src="assets/materialize.js"></script>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>


</html>