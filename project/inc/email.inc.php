<?php
  require_once '../config/dbcon.php';
  require_once 'session.php';
  require_once 'functions.inc.php';



if(isset($_POST['check'])){
        $otp  = $_POST["otp"];
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);

        
        $check_code = "SELECT * FROM tbl_passenger WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE tbl_passenger SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){

                $_SESSION['email'] = $Email;
            header("location:index.php");
              exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            header("location:../email.php?error=invalidcode");
        }
    }
    if (emptyverification($otp) !==false){
      header("location:../email.php?error=emptyInput");
      exit();
    }


  