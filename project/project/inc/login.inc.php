

<?php





if (isset($_POST['login'])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  require_once '../config/dbcon.php';
  require_once '../inc/functions.inc.php';
  require_once '../inc/session.php';
  




	login($conn, $email, $errors, $password);


}



else {
  header("location:../index.php=invalidcredentials");
}
