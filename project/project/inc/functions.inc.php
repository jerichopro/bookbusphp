<?php 




  function createPassenger($conn, $Lname, $Fname, $Mname, $Email, $password, $mobile, $code, $status, $roleid, $isActive){
    $code = rand(999999, 111111);

    $status = "not verified";
    $sql = "INSERT INTO tbl_passenger (lname, fname, mi, email, password, mobile, code, status, roleid, isActive )
  
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
  
    $stmt  = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../passenger.register.php?error=statementfailed");
      exit();
    }
  
  
    mysqli_stmt_bind_param($stmt, "ssssssssss", $Lname, $Fname, $Mname, $Email, $password, $mobile, $code, $status, $roleid, $isActive);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  
  
    $info = "We've sent a verification code to your email <br> $Email";
    $_SESSION['info'] = $info;
     $subject = "Email Verification code";
     $mailTo = $Email;
     $headers = "From:manabatlarry01@gmail.com";
     $text = "Your verification code is:" .$code;
      mail($mailTo, $subject, $text, $headers);
      $_SESSION['user_reg1'] = " $info";
       
       header("location:../email.php");
    exit();
  }

  function createBuscompany($conn, $compname, $address, $Email, $password, $mobile, $code, $status, $roleid, $isActive){
    $code = rand(999999, 111111);
    $status = "not verified";
    $sql = "INSERT INTO tbl_buscompanys (compname, address, email, password, mobile, code, status, roleid, isActive )
  
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
  
    $stmt  = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../buscompany.register.php?error=statementfailed");
      exit();
    }
  
  
    mysqli_stmt_bind_param($stmt, "sssssssss", $compname, $address, $Email, $password, $mobile, $code, $status, $roleid, $isActive);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  
  
    $info = "We've sent a verification code to your email <br> $Email";
    $_SESSION['info'] = $info;
     $subject = "Email Verification code";
     $mailTo = $Email;
     $headers = "From: jerichoprowtf@gmail.com";
     $text = "Your verification code is:" .$code;
      mail($mailTo, $subject, $text, $headers);
      $_SESSION['user_reg2'] = " $info";
       
       header("location:../email.copy.php");
    exit();
  }

  function addemployee($conn, $Lname, $Fname, $Mname, $position, $Email, $password, $roleid, $CompID){

    $sql = "INSERT INTO tbl_employees (lname, fname, mi, position, email, password, roleid, CompID)
  
     VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
  
    $stmt  = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../passenger.register.php?error=statementfailed");
      exit();
    }
  
  
    mysqli_stmt_bind_param($stmt, "ssssssss", $Lname, $Fname, $Mname, $position, $Email, $password, $roleid, $CompID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  

       header("location:../buscompany.php");
    exit();
  }


  function addbusroute($conn, $FromLocation, $ToLocation, $TimeTravel, $DateTravel, $BusID, $EmpIDdriver, $EmpIDconductor, $FareAmount, $CompID){

    $sql = "INSERT INTO tbl_travelschedule (FromLocation, ToLocation, TimeTravel, DateTravel, BusID, EmpIDdriver, EmpIDconductor, FareAmount, CompID)
  
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
  
    $stmt  = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../buscompany.register.php?error=statementfailed");
      exit();
    }
  
  
    mysqli_stmt_bind_param($stmt, "sssssssss", $FromLocation, $ToLocation, $TimeTravel, $DateTravel, $BusID, $EmpIDdriver, $EmpIDconductor, $FareAmount, $CompID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  

       header("location:../buscompany.php");
    exit();
  }


  function addbus($conn, $bodyno, $busplate, $chasisno, $seatcapacity, $CompID){

    $sql = "INSERT INTO tbl_buses (bodyno, busplate, chasisno, seatcapacity, CompID)
  
     VALUES (?, ?, ?, ?, ?);";
  
    $stmt  = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../passenger.register.php?error=statementfailed");
      exit();
    }
  
  
    mysqli_stmt_bind_param($stmt, "sssss", $bodyno, $busplate, $chasisno, $seatcapacity, $CompID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  
    $_SESSION['success101']  = "Successfully added";
       header("location:../buscompany.php");
    // exit();
  }
  



  function uemailExist($conn, $Email){
    $sql = "SELECT * FROM tbl_passenger WHERE email = ?;";
    $stmt =  mysqli_stmt_init($conn);// prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../passenger.register.php?error=statementfailedd");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $Email);
    mysqli_stmt_execute($stmt);
  
    $resultData = mysqli_stmt_get_result($stmt);
  
    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    }
    else {
        $result = false;
      return $result;
    }
  
    mysqli_stmt_close($stmt);
  }
  
  function uemailExist1($conn, $Email){
    $sql = "SELECT * FROM tbl_buscompanys WHERE email = ?;";
    $stmt =  mysqli_stmt_init($conn);// prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../buscompany.register.php?error=statementfailedd");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $Email);
    mysqli_stmt_execute($stmt);
  
    $resultData = mysqli_stmt_get_result($stmt);
  
    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    }
    else {
        $result = false;
      return $result;
    }
  
    mysqli_stmt_close($stmt);
  }

  function uemailExist2($conn, $Email){
    $sql = "SELECT * FROM tbl_employees WHERE email = ?;";
    $stmt =  mysqli_stmt_init($conn);// prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location:../buscompany.register.php?error=statementfailedd");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $Email);
    mysqli_stmt_execute($stmt);
  
    $resultData = mysqli_stmt_get_result($stmt);
  
    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    }
    else {
        $result = false;
      return $result;
    }
  
    mysqli_stmt_close($stmt);
  }
  
  function invalidEmail($Email){
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
      $result = true;
    }
    else {
      $result = false;
    }
      return $result;
  }
  
// Login Redirect
  function login($conn, $email, $errors, $password){

    $query = "SELECT * FROM tbl_admin WHERE email='$email' AND password='$password'  LIMIT 1";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {

  $logged_in_user = mysqli_fetch_assoc($results);
  $_SESSION['user_data4'] = $logged_in_user;
    $_SESSION['user_data4'] = $logged_in_user;
    
    $_SESSION['success']  = "You are now logged in";
    header('location:../admin.php');
    exit();
  }
      $query1 = "SELECT * FROM tbl_passenger WHERE email='$email' AND password='$password'  AND status='verified' AND isActive='1' LIMIT 1";
      		$results = mysqli_query($conn, $query1);

          if (mysqli_num_rows($results) == 1) {

  			$logged_in_user = mysqli_fetch_assoc($results);
        $_SESSION['user_data1'] = $logged_in_user;
  				$_SESSION['user_data1'] = $logged_in_user;
          
  				$_SESSION['success']  = "You are now logged in";
  				header('location:../passenger.php');
          exit();
		}
    $query2 = "SELECT * FROM tbl_employees WHERE email='$email' AND password='$password'  LIMIT 1";
      		$results = mysqli_query($conn, $query2);

          if (mysqli_num_rows($results) == 1) {

  			$logged_in_user = mysqli_fetch_assoc($results);
        $_SESSION['user_data2'] = $logged_in_user;


  				$_SESSION['user_data2'] = $logged_in_user;
  				$_SESSION['success']  = "You are now logged in";
  				header('location:../employee.php');
          exit();
		}
    $query3 = "SELECT * FROM tbl_buscompanys WHERE email='$email' AND password='$password' AND status='verified' AND isActive='1' LIMIT 1";
    $results = mysqli_query($conn, $query3);

    if (mysqli_num_rows($results) == 1) {

  $logged_in_user = mysqli_fetch_assoc($results);
  $_SESSION['user_data3'] = $logged_in_user;
    $_SESSION['user_data3'] = $logged_in_user;
    
    $_SESSION['success']  = "You are now logged in";
    header('location:../buscompany.php');
    exit();
}

  


    else
    {
				header('location:../index.php?error=invalid');

		}

	}




