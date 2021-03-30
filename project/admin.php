<?php
include_once dirname(__FILE__) . '/config/dbcon.php';
include_once dirname(__FILE__) . '/inc/session.php';

if(isset($_SESSION['user_data4'])) {
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../assets/materialize.min.css"  media="screen,projection"/>   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<title>BookBusPH-Admin Panel</title>
</head>
<body>
    
<nav>
  <div class="nav-wrapper sidenav-fixed grey darken-4">
    <a href="index.html" class="brand-logo "></a><img src="/project/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px; ">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
  </div>
</nav>


  <ul class="sidenav sidenav-fixed grey darken-4" id="mobile-demo">
    <li><div class="user-view">
      <div class="background">
        <img src="/project/images/1.jpg" height="100%" width="100%">
      </div>
      <a><img class="circle" src="images/1.jpg"></a>
      <a><span class="white-text name"><h3>Welcome Admin! </h3></span> </a>
      <a><span class="white-text email"><?php    echo "".$_SESSION['user_data4']['email']; ?></span></a>
      
    </div></li>
    <li><a href="#Dashboard" class="white-text waves-effect waves-teal" id="dashbtn"><i class="material-icons white-text">dashboard</i>Dashboard</a></li>

    <ul class="collapsible">
      <li>
      <div class="collapsible-header white-text waves-effect waves-teal"><i class="material-icons white-text ">directions_bus</i>Validations</a></div>
        <div class="collapsible-body">
          <ul>
              <li><div class="divider black-text"></div></li>
              <li><a href="#addreservation" class="black-text modal-trigger waves-effect waves-teal" id="addreservationbtn">Bus Company Validations<i class="material-icons right black-text">queue</i></a></li>
              <li><div class="divider black-text"></div></li>
          </ul>
        </div>
      </div>
      </li>
      <li>
      <li>
      <div class="collapsible-header white-text waves-effect waves-teal"><i class="material-icons white-text ">directions_bus</i>User Management</a></div>
        <div class="collapsible-body">
          <ul>
              <li><div class="divider black-text"></div></li>
              <li><a href="#addreservation" class="black-text modal-trigger waves-effect waves-teal" id="addreservationbtn">User List<i class="material-icons right black-text">queue</i></a></li>
              <li><div class="divider black-text"></div></li>
          </ul>
        </div>
      </div>
      </li>
      <li>
        <div class="collapsible-header white-text waves-effect waves-teal "><i class="material-icons white-text">person</i>Account Settings</div>
          <div class="collapsible-body">
            <ul>
              <li><div class="divider black-text"></div></li>
              <li><a href="#profile" class="black-text modal-trigger waves-effect waves-teal" id="profilebtn">Profile<i class="material-icons right black-text">person</i></a></li>
              <li><div class="divider white-text"></div></li>
              <li><a href="#changepass" class="black-text modal-trigger waves-effect waves-teal" id="changepassbtn">Change Password<i class="material-icons right black-text">https</i></a></li>
              <li><div class="divider black-text"></div></li>
            </ul>
            <li><div class="divider" class="black-text"></div></li>
        </div>
      </li>
      <li><a href="logout.php" class="waves-effect waves-teal  white-text" id="logoutBtn"><i class="material-icons white-text">exit_to_app</i>Logout</a></li>
    </ul>
  </ul>
  



  



<script>

    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(sidenav);
    var collapsible = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(collapsible);
    var modal = document.querySelectorAll('.modal');
    var instances = M.Modal.init(modal);
    var FormSelect = document.querySelectorAll('select');
    var instances = M.FormSelect.init(FormSelect);
    var Materialbox = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(Materialbox);
    var Datepicker = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(Datepicker);
    var Timepicker = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(Timepicker);



</script>

<script type="text/javascript" src="../assets/materialize.min.js"></script>
<script type="text/javascript" src="../assets/materialize.js"></script>
<script type="text/javascript" src="../assets/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

</body>
</html>