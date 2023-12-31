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
                <h1 class="m-0">Leave</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Leave</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-5">
        <form method="post" action="leave_request_submit_user.php">
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID:</label>
                <input type="text" name="employee_id" id="employee_id" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="leave_type" class="form-label">Leave Type:</label>
                <select name="leave_type" id="leave_type" class="form-select" required>
                    <option value="">Select Leave Type</option>
                    <?php
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

                    // Retrieve leave types from the database
                    $sql = "SELECT id, lt_name FROM leave_types";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["lt_name"] . "</option>";
                        }
                    }

                    $conn->close();
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="day_type" class="form-label">Day Type:</label>
                <select name="day_type" id="day_type" class="form-select" required>
                    <option value="">Select Day Type</option>
                    <option value="1">Whole Day</option>
                    <option value="0.5">Half Day</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" required
                    onchange="calculateLeaveDuration()">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date:</label>
                <input type="date" name="end_date" id="end_date" class="form-control"
                    onchange="calculateLeaveDuration()">
            </div>

            <div class="mb-3">
                <label for="days" class="form-label">Days:</label>
                <text name="days" id="days" rows="3" class="form-control" ></text>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label">Reason:</label>
                <textarea name="reason" id="reason" rows="3" class="form-control" required></textarea>
            </div>

            <!-- Include other leave request fields -->

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Add the provided JavaScript function -->

    <!-- Your existing HTML code -->

    <script>
    function calculateLeaveDuration() {
        const startDateInput = document.getElementById("start_date");
        const endDateInput = document.getElementById("end_date");
        const dayTypeSelect = document.getElementById("day_type");
        const daysField = document.getElementById("days");

        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);
        const dayType = parseFloat(dayTypeSelect.value);

        // Calculate the difference in milliseconds
        const diffInMilliseconds = endDate - startDate;

        // Convert milliseconds to days
        let diffInDays = diffInMilliseconds / (1000 * 60 * 60 * 24);

        // Check if the start date and end date are the same day or end date is the next day
        if (startDate.getFullYear() === endDate.getFullYear() &&
            startDate.getMonth() === endDate.getMonth() &&
            startDate.getDate() === endDate.getDate()) {
            diffInDays = 1.0;
        } else if (diffInMilliseconds >= 0 && startDate.getDate() !== endDate.getDate()) {
            diffInDays += 1;
        }

        // If the day type is half day, reduce the calculated days by 0.5
        if (dayType === 0.5) {
            diffInDays -= 0.5;
        }

        // Display the calculated duration in the "Days" field
        daysField.textContent = diffInDays.toFixed(1); // Show one decimal place
    }
</script>


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
