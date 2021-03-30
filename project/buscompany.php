<?php
include_once dirname(__FILE__) . '/config/dbcon.php';
include_once dirname(__FILE__) . '/inc/session.php';

if(isset($_SESSION['user_data3'])) {
  if(isset($_SESSION['success'])){
  $show_message = $_SESSION['success'];
   $_SESSION['success'] = null;
 }
 if (isset($show_message)) {
 echo "<script>alert('{$show_message}');</script>";
 }

}
if(isset($_SESSION['user_data3'])) {
    if(isset($_SESSION['success101'])){
    $show_message101 = $_SESSION['success101'];
     $_SESSION['success101'] = null;
   }
   if (isset($show_message101)) {
   echo "<script>alert('{$show_message101}');</script>";
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
    <link type="text/css" rel="stylesheet" href="assets/materialize.min.css"  media="screen,projection"/>   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<title>BookBusPH-Bus Company Panel</title>
</head>
<body>

    <nav>
        <div class="nav-wrapper sidenav-fixed grey darken-4">
        <a href="index.html" class="brand-logo"></a><img src="/project/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        </div>
    </nav>


<ul class="sidenav sidenav-fixed grey darken-4" id="mobile-demo">
    <li><div class="user-view">
            <div class="background">
                <img src="/project/images/1.jpg" height="100%" width="100%">
            </div>
            <a href="#user"><img class="circle" src="images/1.jpg"></a>
            <a href="#name"><span class="white-text name"><h3><?php    echo "".$_SESSION['user_data3']['compname']; ?></h3></span>
            <a href="#email"><span class="white-text email"><?php    echo "".$_SESSION['user_data3']['email']; ?></span></a>
        </div>
    </li>

    <li><a href="#Dashboard" class="white-text " id="dashbtn"><i class="material-icons white-text">dashboard</i>Dashboard</a></li>
    <li><a href="#Reservations" class="white-text" id="resbtn"><i class="material-icons white-text">directions_bus</i>Reservation Reports</a></li>
    
    <ul class="collapsible ">
        
        <li>
        <div class="collapsible-header white-text"><i class="material-icons">group</i>Employees</div>
            <div class="collapsible-body">
                <ul>
                <li><div class="divider black-text"></div></li>
                <li><a href="#addemployee" class="black-text modal-trigger" id="addemployeebtn">Add Employees<i class="material-icons right black-text">group_add</i></a></li>
                <li><div class="divider white-text"></div></li>
                <li><a href="#editemployee" class="black-text modal-trigger" id="editemployeebtn">All Employees<i class="material-icons right black-text">list</i></a></li>
                <li><div class="divider black-text"></div></li>
                </ul>
            </div>
        
        </li>
        <li>
        <div class="collapsible-header white-text"><i class="material-icons">directions_bus</i>Bus</div>
            <div class="collapsible-body">
                <ul>
                    <li><div class="divider black-text"></div></li>
                    <li><a href="#addbus" class="black-text modal-trigger" id="addbusbtn">Add Bus<i class="material-icons right black-text">add_box</i></a></li>
                    <li><div class="divider white-text"></div></li>
                    <li><a href="#editbus" class="black-text modal-trigger" id="editbusbtn">All Buses<i class="material-icons right black-text">list</i></a></li>
                    <li><div class="divider black-text"></div></li>
                </ul>
            </div>

        </li>
        <li>
        <div class="collapsible-header white-text"><i class="material-icons">directions</i>Bus Routes</div>
            <div class="collapsible-body">
                <ul>
                    <li><div class="divider black-text"></div></li>
                    <li><a href="#addbusroute" class="black-text modal-trigger" id="addbusroutebtn">Add Bus Routes<i class="material-icons right black-text">add_box</i></a></li>
                    <li><div class="divider white-text"></div></li>
                    <li><a href="#routes" class="black-text modal-trigger" id="routesbtn">All Buses Routes<i class="material-icons right black-text">list</i></a></li>
                    <li><div class="divider black-text"></div></li>
                </ul>
            </div>        
  
        </li>
        <li>
        <div class="collapsible-header white-text"><i class="material-icons">group</i>Discounts</div>
            <div class="collapsible-body">
                <ul>
                <li><div class="divider black-text"></div></li>
                <li><a href="#AdjustDiscounts" class="black-text modal-trigger" id="adjdiscbtn">Discount Adjustments<i class="material-icons right black-text">group_add</i></a></li>
                <li><div class="divider white-text"></div></li>
                <li><a href="#AddDiscount" class="black-text modal-trigger" id="adddiscbtn">Add Discount<i class="material-icons right black-text">list</i></a></li>
                <li><div class="divider black-text"></div></li>
                </ul>
            </div>
        
        </li>
        <li><div class="divider" class="black-text"></div></li>
        </li>

        <li><a href="logout.php" class="waves-effect waves-light white-text" id="logoutBtn"><i class="material-icons white-text">exit_to_app</i>Logout</a></li>


        </li>
    </ul>
</ul>




<div class="row " style="padding-top: 2%; padding-right: 2%;" id="Dashboard">
    <div class="col m3 l3"></div>
    <div class="col s12 m9 l9">
        <div class="card">
            <div class="card-content">
                <div class="card-content" >
                <h2>Dashboard</h2>
                <hr>
                    <div class="row">
                        <?php
                                $sql="SELECT count(*) as bus from tbl_buses ";
                                $result=mysqli_query($conn,$sql);
                                $data=mysqli_fetch_assoc($result);

                                $instructor="SELECT count(*) as employees from tbl_employees ";
                                $result1=mysqli_query($conn,$instructor);
                                $data1=mysqli_fetch_assoc($result1);

                                $student="SELECT count(*) as reservation from tbl_bookings ";
                                $result2=mysqli_query($conn,$student);
                                $data2=mysqli_fetch_assoc($result2);

                        ?>
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-content grey darken">
                                    <h6 class="center-align " style="font-size: small;"><b>Total Buses</b></h6>
                                    
                                    <h2 class="center-align"><b id="buses"><?php  echo $data['bus'];?></b></h2>
                                </div>
                             </div>
                        </div>
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-content grey darken">
                                    <h6 class="center-align" style="font-size: small;"><b>Total Employees</b></h6>
                                    <h2 class="center-align"><b id="employees"><?php  echo $data1['employees'];?></b></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-content grey darken">
                                    <h6 class="center-align" style="font-size: small;"><b>Total Reservations</b></h6>
                                    <h2 class="center-align"><b id="totalreservations"><?php  echo $data2['reservation'];?></b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="row hide" style="padding-top: 2%;padding-right: 2%;" id="Reservations">
    <div class="col m3 l3"></div>
        <div class="col s12 m9 l9">
            <div class="card">
                <div class="card-content">
                    <div class="card-content" >
                    <h2>Reports</h2>
                    <hr>
                        <div class="row">
                            <div class="input-field col s12 m5 l3">
                                <h6 class="left-align" id="currentDate">Date: 3/28/2021</h6>
                            </div>
                            <div class="input-field col s6 m5 l3">
                                <i class="material-icons prefix">date_range</i>
                                <input type="date" id="reservationDate" name="reservationDate">
                                <label for="reservationDate">Filter date</label>
                                <h6 class="hide red-text center-align" style="font-size: x-small;" id="errorRepDate"><b>Field must not be empty!</b></h6>
                            </div>
                            <div class="input-field col s6 m2 l2">
                                <button class="btn-small waves-effect waves-light blue-grey" id="searchReportBtn"><i class="material-icons">search</i></button>
                            </div>
                            <div class="input-field col s12 m12 l8">
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="printReports">
                                        <tr data-id="u6CqgTAKziWbpXj1X5rp">
                                            <td>2021-03-11</td>
                                            <td>Banaybanay</td>
                                            <td>Baganga</td>
                                            <td>21</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>









<div class="modal modal-fixed-footer" id="AdjustDiscounts">
    <div class="modal-content">
        <div class="row">
            <h3 class="center-align">Discounts Adjustments</h3>
            <hr>

                <div class="input-field col s12 m6 l3">
                    <select name="DiscountName" id="DiscountName" required>
                        <option value="" disabled selected>Select Discount Name</option>
                        <?php
                        $results = $conn->query("SELECT * FROM tbl_discounts");
                        if ($results) { 
                        while($obj = $results->fetch_object()){
                            echo '<option value="'.$obj->DiscountName.'">'.$obj->DiscountName.'</option>';
                            }
                                }
                            ?>
                    </select>
                    <label for="DiscountName" class="black-text">Discount Name</label>
                </div> 
        </div>      
    </div>
    <div class="modal-footer right-align">
        <button class="btn-small waves-effect waves-light black modal-close"><i class="material-icons">close</i></button>
    </div>
</div>

	


<div class="modal modal-fixed-footer" id="AddDiscount">
    <div class="modal-content">
        <div class="row">
            <h3 class="center-align">Add Discounts</h3>
            <hr>
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="DiscountName" id="DiscountName" class="validate" required>
                    <label for="DiscountName">Discount Name</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input type="text" name="PercentageRate" id="PercentageRate" class="validate" required>
                    <label for="PercentageRate">Discount Percentage Rate</label>
                </div>
                <div class="col s12 m12 l12 left-align">

                        </div>
                <div class="input-field col s12 m6 l3">
                    <input type="date" name="PromoDateFrom" id="PromoDateFrom" required >
                    <label for="PromoDateFrom">Promo Date Starts</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input type="date" name="PromoDateTo" id="PromoDateTo" required >
                    <label for="PromoDateTo">Promo Date Ends</label>
                </div>
                
        </div>      
    </div>
    <div class="modal-footer right-align">
        <button class="btn-small waves-effect waves-light black modal-close"><i class="material-icons">close</i></button>
    </div>
</div>






<!-- Add Employee -->
  <div class="col s6 m12 l12  modal modal-fixed-footer" id="addemployee">
    <form action="inc/addemployee.inc.php" method="post">
        <div class="modal-content">

                <h5 class="center-align"><b>Add Employee</b></h5>
                <hr />

                    <div class="row">   

                        <div class="col s12 m12 l12 left-align">
                            <h6><b>Employee Details</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="lname" id="lname" class="validate" required>
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="fname" id="fname" class="validate" required>
                            <label for="fname">First Name</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="mi" id="mi" class="validate" required>
                            <label for="mi">Middle Initial</label>
                        </div>
                        <div class="col s12 m12 l12 left-align">
                        <h6><b>Position</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <select name="position" id="position" required>
                                <option value="" disabled selected>Select</option>
                                <option value="driver">Driver</option>
                                <option value="conductor">Conductor</option>
                            </select>
                        </div>
                        <div class="col s12 m12 l12 left-align">
                            <h6><b>Employee Login Account</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="email" id="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="password" name="password" id="password" class="validate" required>
                            <label for="password">Password</label>
                            <input type="hidden" name="roleid" value="3" class="form-control">
                        </div>
                        <input type="hidden" name="CompID" value="<?php    echo "".$_SESSION['user_data3']['CompID']; ?>" class="form-control">  
                    </div>


        </div>    

        <div class="modal-footer">
            <button class="btn waves-effect waves-light white-text black" name="addemp">Add Employee<i class="material-icons right white-text">send</i></button>
        </div>
    </form>
</div>
<!-- End of add Employee -->


<!-- Add bus -->
<div class="col s12 m12 l12  modal modal-fixed-footer" id="addbus">
    <form action="inc/addbus.inc.php" method="post">    
        <div class="modal-content">

                <h5 class="center-align "><b>Add Bus</b></h5>
                <hr />
                <div class="row">
                        <div class="col s12 m12 l16 left-align">
                            <h6><b>Bus Details</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="bodyno" id="bodyno" class="validate" required>
                            <label for="bodyno">Bus body number</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="busplate" id="busplate" class="validate" required>
                            <label for="busplate">Bus plate number</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="chasisno" id="chasisno" class="validate" required>
                            <label for="chasisno">Bus Chasis number</label>
                        </div>
                        <div class="col s12 m12 l12 left-align">
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="number" name="seatcapacity" id="seatcapacity" class="validate" required>
                            <label for="seatcapacity">Seat capacity</label>
                        </div>
                        <input type="hidden" name="CompID" value="<?php    echo "".$_SESSION['user_data3']['CompID']; ?>" class="form-control">
                        </div>
                </div>

        <div class="modal-footer">
            <button class="btn waves-effect waves-light white-text black" name="addbuss">Submit<i class="material-icons right white-text">send</i></button>
        </div>
    </form>
</div>
<!-- End of add bus -->



<!-- Add bus Route -->
<div class="col s12 m12 l12  modal modal-fixed-footer" id="addbusroute">
    <form action="inc/addbusroute.inc.php" method="post">
        
        <div class="modal-content">
            <div class="card-content">
            <h5 class="center-align"><b>Add Bus Routes</b></h5>                
            <hr />
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l16 left-align">
                            <h6><b>Bus Route Details</b></h6>
                        </div>
                        
                        <div class="input-field col s12 m6 l2">
                        <select name="FromLocation" id="FromLocation" required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                $results0 = $conn->query("SELECT * FROM tbl_locations");
                                if ($results0) { 
                                    while($obj = $results0->fetch_object()){
                                        echo '<option value="'.$obj->LocationName.'">'.$obj->LocationName.'</option>';
                                    }
                                }
                            ?>
                        </select>
                            <label for="FromLocation" class="black-text">Depart from</label>
                        </div>
                        
                        <div class="input-field col s12 m6 l2">
                        <select name="ToLocation" id="ToLocation" required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                $results = $conn->query("SELECT * FROM tbl_locations");
                                if ($results) { 
                                    while($obj = $results->fetch_object()){
                                        echo '<option value="'.$obj->LocationName.'">'.$obj->LocationName.'</option>';
                                    }
                                }
                            ?>
                        </select>
                            <label for="ToLocation" class="black-text">Arrive to</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="TimeTravel" id="TimeTravel" class="timepicker" required>
                            <label for="TimeTravel">Departure time</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="date" name="DateTravel" id="DateTravel" required >
                            <label for="DateTravel">Departure date</label>
                        </div>
                        <div class="col s12 m12 l12 left-align">
                        </div>
                        <div class="input-field col s12 m6 l2">
                        <select name="BusID" id="BusID" required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                $results1 = $conn->query("SELECT * FROM tbl_buses WHERE CompID='".$_SESSION['user_data3']['CompID']."'");
                                if ($results1) { 
                                    while($obj = $results1->fetch_object()){
                                        echo '<option value="'.$obj->BusID.'">'.$obj->bodyno.'</option>';
                                    }
                                }
                            ?>
                        </select>
                            <label for="BusID">Bus Plate</label>
                        </div>

                        <div class="row">
                        <div class="col s12 m12 l12 left-align">
                            <h6><b>Employee</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l3">
                        <select name="EmpIDdriver" id="EmpIDdriver" required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                    $results1 = $conn->query("SELECT * FROM tbl_employees WHERE CompID='".$_SESSION['user_data3']['CompID']."'AND position ='driver'");
                                    if ($results1) { 
                                        while($obj = $results1->fetch_object()){
                                            echo '<option value="'.$obj->EmpID.'">'.$obj->lname.'</option>';
                                        }
                                    }
                                ?>
                        </select>
                            <label for="EmpIDdriver" class="black-text">Driver</label>
                        </div>

                        <div class="input-field col s12 m6 l3">
                        <select name="EmpIDconductor" id="EmpIDconductor" required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                    $results1 = $conn->query("SELECT * FROM tbl_employees WHERE CompID='".$_SESSION['user_data3']['CompID']."' AND position ='conductor'");
                                    if ($results1) { 
                                        while($obj = $results1->fetch_object()){
                                            echo '<option value="'.$obj->EmpID.'">'.$obj->lname.'</option>';
                                        }
                                    }
                                ?>
                        </select>
                            <label for="EmpIDconductor" class="black-text">Conductor</label>
                        </div> 



                        
                                
                        <div class="col s12 m12 l12 left-align">
                            <h6><b>Travel Fare Amount</b></h6>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="number" name="FareAmount" id="FareAmount" class="validate" required>
                        </div>
                        <input type="hidden" name="CompID" value="<?php    echo "".$_SESSION['user_data3']['CompID']; ?>" class="form-control">
                        </div>
 
                    </div>
                </div>
            </div>
        </div> 

        <div class="modal-footer">                
            <button class="btn waves-effect waves-light white-text black" name="addroute">Submit<i class="material-icons right white-text">send</i></button>
        </div>  
    </form>
</div>
<!-- End of add bus Route -->








<div class="col s12 m12 l12 modal modal-fixed-footer" id="editemployee">
  <div class="row" style="padding-left: 1%;padding-right: 1%;">
      <div class="card-content">
          <div class="modal-content">
              <div class="col s12 m12 l12">
                  <ul class="tabs tabs-fixed-width tab-demo z-depth-1 black">
                      <li class="col s6 m6 l6 tab"><a class="white-text">Active Bus</a></li>
                  </ul>
              </div>

              <div class="col s12 m12 l12" id="activeBuses">
                    <?php
                    $results = mysqli_query($conn, "SELECT EmpID, CONCAT(lname,' ' ,fname,' ',mi) AS NAME FROM tbl_employees" ); ?>

                    <table id="t01"class="">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><?php echo $row['EmpID']; ?></td>
                                <td><?php echo $row['NAME']; ?></td>
                                <td><a href="#addemployee?edit=<?php echo $row['EmpID']; ?>"id="info" class="black-text modal-trigger">Edit</a></td>
                            </tr>
                        </tbody>

                    <?php } ?>
                    </table>

                </div>
            </div>       
        </div>
    </div>
</div>


<div class="col s12 m12 l12 modal modal-fixed-footer" id="routes">
  <div class="modal-content">
      <div class="card-content">
          <div class="row">
              <div class="col s12 m12 l12">
                  <ul class="tabs tabs-fixed-width tab-demo z-depth-1 black">
                      <li class="col s6 m6 l6 tab"><a class="white-text">Bus Routes</a></li>
                  </ul>
              </div>

              <div class="col s12 m12 l12" id="activeBuses">

            <?php
            // if (isset($_GET['edit'])) {
            //     $id = $_GET['edit'];
            //     $update = true;
            //     $record = mysqli_query($conn, "SELECT * FROM tbl_programoffer WHERE Program_ID=$id");
            //     if ( $record ->num_rows ) {
            //        $rows = $record->fetch_array();
            //       $Program_ID =  $rows['Program_ID'];
            //       $Program_Desc =  $rows['Program_Desc'];
              
            //     }
            //   }
            $results = mysqli_query($conn, "SELECT BusID, FromLocation, ToLocation, DateTravel, TimeTravel FROM tbl_travelschedule" ); ?>

     <table id="t01"class=" highlight">
    <thead>
      <tr>
        <th>Bus ID</th>
        <th>From Location</th>
        <th>To Location</th>
        <th>Date of Travel</th>
        <th>Time of Travel</th>


        <th colspan="2">Action</th>
      </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <tr>
        <td><?php echo $row['BusID']; ?></td>
        <td><?php echo $row['FromLocation']; ?></td>
        <td><?php echo $row['ToLocation']; ?></td>
        <td><?php echo $row['DateTravel']; ?></td>
        <td><?php echo $row['TimeTravel']; ?></td>
        



        <td>

              <a href="#addemployee?edit=<?php echo $row['EmpID']; ?>"id="info" class="black-text modal-trigger">Edit</a>
            </td>

            


                  </tr>
                </tbody>

  <?php
  }

       ?>
    </table>

              </div>
          </div>
          
      </div>
  </div>
 
</div>











<div class="col s12 m12 l12 modal modal-fixed-footer" id="editbus">
  <div class="modal-content">
      <div class="card-content">
          <div class="row">
              <div class="col s12 m12 l12">
                  <ul class="tabs tabs-fixed-width tab-demo z-depth-1 black">
                      <li class="col s6 m6 l6 tab"><a href="#activeBuses" class="white-text">Active Bus</a></li>
                      <li class="col s6 m6 l6 tab"><a href="#inactiveBuses" class="white-text">Inactive Bus</a></li>
                  </ul>
              </div>
              <div class="col s12 m12 l12" >
                  <table class="striped highlight">
                      <thead>
                          <tr>
                              <th>Bus plate number</th>
                              <th>Route</th>
                          </tr>
                      </thead>
                      <tbody id="activeBus">

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>




</body>



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

    var dashdiv = document.getElementById('Dashboard');
    var resdiv = document.getElementById('Reservations');

    
    dashbtn.addEventListener('click', e=>{
        dashdiv.classList.remove('hide');
        resdiv.classList.add('hide');

       
    });

    resbtn.addEventListener('click', e=>{
        dashdiv.classList.add('hide');
        resdiv.classList.remove('hide');

       
    });



</script>

<script type="text/javascript" src="assets/materialize.min.js"></script>
<script type="text/javascript" src="assets/materialize.js"></script>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>


</html>