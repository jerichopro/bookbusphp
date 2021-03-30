<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookBusPH</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize.min.css"  media="screen,projection"/>   

  </head>
  <body>

  <nav  class="grey darken-4">
  <a href="#" class="brand-logo"><img src="/project /images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>

  <ul class="sidenav sidenav-close grey darken-2" id="mobile-demo">
        <li><a class="white-text waves-effect waves-light" href="passenger.register.php">Register as Passenger</a></li>
        <li><a class="white-text waves-effect waves-light" href="buscompany.register.php">Register as BusCompany</a></li>  
        <li><a class="white-text waves-effect waves-light" href="index.php">Home</a></li>
        <li><a href="#" data-target="loginModal" class="btn-small waves-effect waves-light blue modal-trigger white-text" id="loginbtn1"><b>Login</b></a></li>
  </ul>
    <div class="nav-wrapper">
      <ul id="dropdown1" class="dropdown-content" >
        <li><a  href="passenger.register.php">Register as Passenger</a></li>
        <li><a  href="buscompany.register.php">Register as BusCompany</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>


        <li><a class="dropdown-trigger" href="" data-target="dropdown1">Account's Registration<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="#" data-target="loginModal" class="modal-trigger white-text" id="loginbtn2"><b>Login</b></a></li>

        </nav>




<div class="container">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Bus Company Registration</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="inc/addbuscompany.inc.php" method="post">
                <div class="form-group pt-3">
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="compname" id="compname" class="validate">
                    <label for="compname">Company Name</label>
                        <div class="error red">
                            <?php  if (isset($_GET["error"])){
                            if ($_GET["error"]== "emailtaken"){
                                echo " <b><center>Email already exist!</center></b><br>";
                                }
                                }
                            ?>
                    </div>
                </div>  
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="email" id="email" class="validate">
                    <label for="email">Email Address</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="address" id="address" class="validate">
                    <label for="address">Address</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="mobile" id="mobile" class="validate">
                    <label for="mobile">Mobile</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input type="password" name="password" id="password" class="validate">
                    <label for="password">Password</label>
                    <input type="hidden" name="roleid" value="4" class="form-control">
                    <input type="hidden" name="isActive" value="0" >
                </div>
                <div class="form-group">
                <label for="password">Upload Valid ID</label><br>
                  <input type="file" id="inputImage" Name="photo">
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>


            </form>
          </div>


        </div>
      </div>
  </div>

  <div class="modal modal-fixed-footer" id="loginModal">
    <div class="modal-content">
        <div>
            <h5 class="center-align">Login</h5>
        <form action="inc/login.inc.php" method="post" >    

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login">Login</button>
		</div>

	    </form>
                <div class="col s6 m6 l6 left align">
                    <p class="grey-text text-darken-3">Don't have an account?</p>
                    <a href="passenger.register.php" class="modal-trigger modal-close blue-text">Register here</a>
                </div>
            
                </div>
        </div>
    <div class="modal-footer right-align">
        <button class="btn-small waves-effect waves-light grey modal-close"><i class="material-icons">close</i></button>
    </div>
</div>
  </body>




<!-- Jquery script -->
<script src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/materialize.min.js"></script>
<script type="text/javascript" src="assets/materialize.js"></script>


<script>
    $(document).ready(function () {
        $("#flash-msg").delay(7000).fadeOut("slow");
    });
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
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
  var Parallax = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(Parallax );
  $(".dropdown-trigger").dropdown();
});




</script>

</html>
