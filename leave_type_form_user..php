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
            <span class="d-none d-md-inline">Phouvieng KPL</span>
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
              <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
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
              <a href="widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              <!-- <span class="right badge badge-danger">New</span> -->
              </p>
              </a>
              </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                  <!-- <i class="nav-icon fas fa-globe"></i> -->
                  <!-- <i class="nav-icon fas fa-office"></i> -->
                  <!-- <i class="nav-icon fas fa-school"></i> -->
                  <!-- <i class="nav-icon fas fa-music"></i> -->
                  <!-- <i class="nav-icon fas fa-heart"></i> -->
                  <!-- <i class="nav-icon fas fa-camera"></i> -->
                  <!-- <i class="nav-icon fas fa-star"></i> -->
                  <!-- <i class="nav-icon fas fa-search"></i> -->
                  <i class="nav-icon fas fa-house"></i>


                <p>
                  Department
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <!-- Submenu -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="department_insert_form.php" class="nav-link">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <i class="far fa-heart nav-icon"></i>
                    <p>Add Department</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_department.php" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <p>Manage Department</p>
                  </a>
                </li>
              </ul>
              <!-- End Submenu -->
            </li>

            <!-- Dashboard Link -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <i class="nav-icon fas fa-user"></i>
                 <p>
                  Employee
                  <i class="right fas fa-angle-left"></i>  
                </p>
              </a>
              <!-- Submenu -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="employee_insert_form.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Employee</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_employee.php" class="nav-link">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <i class="fas fa-circle nav-icon"></i>

                    <p>Manage Employee</p>
                  </a>
                </li>
                
              </ul>
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
                  <a href="leave_type_form.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Leave Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_leave_type.php" class="nav-link">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <i class="fas fa-circle nav-icon text-primary"></i>
                    <p>Manage Leave Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="leave_request_form_admin.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Leave</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="leave_request_approvals.php" class="nav-link">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <i class="fas fa-circle nav-icon text-primary"></i>
                    <p>Manage Leave</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_leave_request_pending.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Pending</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_leave_request_approve.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Approve</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="display_leave_request_reject.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <!-- <i class="nav-icon bi bi-circle text-warning"></i> -->
                    <p>Reject</p>
                  </a>

                </li>
                <li class="nav-item">
                  <a href="display_leave_request.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>History</p>
                  </a>
                </li>
                
              </ul>
              <!-- End Submenu -->
            </li>

            <li class="nav-item">
            <a href="widgets.html" class="nav-link">
            <!-- <i class="nav-icon fas fa-th"></i> -->
            <i class="nav-icon fas fa-door-open"></i>
            <p>
            Manage Admin
            <!-- <span class="right badge badge-danger">New</span> -->
            </p>
            </a>
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
                <h1 class="m-0">Leave</h1>
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

        <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $lt_name = $_POST["lt_name"];
        $description = $_POST["description"];
        $balance = $_POST["balance"];

        // Validate form data (add your own validation as needed)

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee_leave_management";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert leave type into the database
        $sql = "INSERT INTO leave_types (lt_name, description, balance) VALUES ('$lt_name', '$description', $balance)";

        if ($conn->query($sql) === TRUE) {
            echo "Leave type added successfully.";
            header("location:display_leave_type.php");
            exit(0);
        } else {
            echo "Error adding leave type: " . $conn->error;
        }

        $conn->close();
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="lt_name">Name:</label>
        <input type="text" name="lt_name" id="lt_name" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required></textarea>

        <label for="balance" class="form-label">Leave Balance:</label>
        <input type="text" name="balance" id="balance" class="form-control" rows="4" required></input>      

        <input type="submit" value="Submit">
    </form>

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
