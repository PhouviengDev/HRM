<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HRM</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
</head>

<?php  session_start(); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#">
            <i class="fas fa-bars"></i>
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <!-- Add more navbar items here -->
      </ul>

      <ul class="navbar-nav ml-auto">
        <!-- User Menu Dropdown -->
        <li class="nav-item dropdown user-menu">
          <!-- User Menu Toggle -->
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="image/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image">
            <span class="d-none d-md-inline"></span> <?php echo $_SESSION['username']; ?></span>
          </a>
          <!-- User Menu Dropdown -->
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!-- User Image -->
            <li class="user-header text-bg-primary">
              <img src="image/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
              <p>
                CSE IT Dev
                <small>Member since July. 2023</small>
              </p>
            </li>
            <!-- Menu Body -->
         
            <!-- Menu Footer -->
            <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
              <a href="signout.php" class="btn btn-default btn-flat float-end">Sign out</a>
            </li>
            <!-- End Menu Footer -->
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar Content -->
      <div class="sidebar">
        <!-- Brand Logo -->
        <a href="./index.html" class="brand-link">
          <img src="image/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
          <span class="brand-text font-weight-light">H R M System</span>
        </a>

        <!-- Sidebar Menu -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
          <div class="sidebar-search-results">
            <div class="list-group">
              <a href="#" class="list-group-item">
                <div class="search-title"><strong class="text-light"></strong>No<strong class="text-light"></strong> <strong class="text-light"></strong>el<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div>
                <div class="search-path"></div>
              </a>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard Link -->

              <li class="nav-item">
              <a href="user_page.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              <!-- <span class="right badge badge-danger">New</span> -->
              </p>
              </a>
              </li>
               
            <!-- Dashboard Link -->
            <li class="nav-item">
              <a href="display_employee_user.php" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <i class="nav-icon fas fa-user"></i>
                 <p>
                  My Profile
                  <!-- <i class="right fas fa-angle-left"></i>   -->
                </p>
              </a>
              <!-- Submenu -->
            
              <!-- End Submenu -->
            </li>

               <!-- Dashboard Link -->
               <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <!-- <i class="nav-icon fas fa-user"></i> -->
                <i class="nav-icon fas fa-briefcase"></i>

                <p>
                  Leave
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <!-- Submenu -->
              <ul class="nav nav-treeview">
             
                <li class="nav-item">
                  <a href="leave_request_form_user.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Leave</p>
                  </a>
                </li>
             
                </li>
                <li class="nav-item">
                  <a href="display_leave_request_user.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Leave History</p>
                  </a>
                </li>
                
              </ul>
              <!-- End Submenu -->
            </li>

            <!-- Add more sidebar menu items here -->
          </ul>
        </nav>


        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                
              <h3>

                      <?php
                      // Assuming you are using PHP to interact with the database
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "employee_leave_management";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);

                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }

                      // SQL query to get the total approved days
                      $sql_approved_days = "SELECT SUM(days) AS total_days FROM leave_requests WHERE status = 'approved' AND leave_type_id = 1;";
                      $result_approved_days = $conn->query($sql_approved_days);

                      // Get the total approved days
                      $total_approved_days = 0;
                      if ($result_approved_days->num_rows > 0) {
                        $row = $result_approved_days->fetch_assoc();
                        $total_approved_days = $row["total_days"];
                      }

                      // SQL query to get the balance from the leave_types table for leave_type_id = 1
                      $sql_balance = "SELECT balance FROM leave_types WHERE id = 1;";
                      $result_balance = $conn->query($sql_balance);

                      // Get the leave balance
                      $leave_balance = 0;
                      if ($result_balance->num_rows > 0) {
                        $row = $result_balance->fetch_assoc();
                        $leave_balance = $row["balance"];
                      }

                      // Calculate the remaining leave balance
                      $remaining_balance = $leave_balance - $total_approved_days;

                      echo $remaining_balance;

                      $conn->close();
                      ?> Days
                  
              </h3>
              
                <p>Total Leave Balance</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                 
                    <?php
                    // Start or resume the session
                    session_start();

                    // Check if the user is logged in
                    if (!isset($_SESSION['username'])) {
                        echo "You are not logged in.";
                        exit;
                    }

                    // Replace these variables with your actual database credentials
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "employee_leave_management";

                    try {
                        // Connect to the database
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Get the username from the session
                        $username = $_SESSION['username'];

                        // Fetch the employee record for the given username from the employees table
                        $sql = "SELECT id, hire_date FROM employees WHERE username = '$username'";
                        $result = mysqli_query($conn, $sql);
                        $employee = mysqli_fetch_assoc($result);

                        if ($employee) {
                            // Function to calculate the total available day leave
                            function calculateAvailableLeave($hireDate, $currentDate)
                            {
                                $daysWorked = (strtotime($currentDate) - strtotime($hireDate)) / (60 * 60 * 24);
                                $yearsWorked = floor($daysWorked / 365);
                                $monthsWorked = floor(($daysWorked % 365) / 30);

                                $totalLeave = ($yearsWorked * 15) + ($monthsWorked * 1.25);
                                return $totalLeave;
                            }

                            // Get the current date
                            $currentDate = date("Y-m-d");

                            // Calculate and display the Total Available Day Leave for the logged-in employee
                            $totalAvailableLeave = calculateAvailableLeave($employee['hire_date'], $currentDate);
                            echo $totalAvailableLeave . " Days<br>";

                        } else {
                            echo "Employee not found.";
                        }

                        // Close the database connection
                        mysqli_close($conn);

                    } catch (Exception $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }
                    ?>
  
                <sup style="font-size: 20px"></sup></h3>
                <p>Total Leave Available</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                    <?php
                      session_start();
                      // Assuming you are using PHP to interact with the database
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "employee_leave_management";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);

                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }

                      // SQL query to get the total_days
                      $sql = "SELECT SUM(days) AS total_days FROM leave_requests WHERE status = 'approved' AND leave_type_id = 1;";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["total_days"];
                      } else {
                        echo "0";
                      }

                      $conn->close();
                      ?> Days 
                </h3>
                <p>Total Sick Leave</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>

                <?php
session_start();
include_once 'functions.php';

// Assuming you are using PHP to interact with the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_leave_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the total_days
$sql = "SELECT SUM(days) AS total_days FROM leave_requests WHERE status = 'approved' AND leave_type_id = 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Get the current date
    $currentDate = date("Y-m-d");

    // Fetch the employee record for the given username from the employees table
    $sql_employee = "SELECT id, hire_date FROM employees WHERE username = '{$_SESSION['username']}'";
    $result_employee = mysqli_query($conn, $sql_employee);
    $employee = mysqli_fetch_assoc($result_employee);

    if ($employee) {
        // Calculate the Total Available Day Leave for the logged-in employee
        $totalAvailableLeave = calculateAvailableLeave($employee['hire_date'], $currentDate);

        // Subtract $totalAvailableLeave from $row["total_days"] and display the result
        $remainingLeave = $totalAvailableLeave - $row["total_days"] ;
        echo $remainingLeave . " Days<br>";
    } else {
        echo "Employee not found.";
    }
} else {
    echo "0";
}

$conn->close();
?>


                </h3>
                <p>Leave Available</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
        </div>

        <!-- Add your page content here -->
      </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Add your footer content here -->

    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright © 2023-2024 <a href="https://adminlte.io">CSE IT</a>.</strong> All rights reserved.
  </footer>

    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- Required scripts for AdminLTE -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
</body>
</html>
