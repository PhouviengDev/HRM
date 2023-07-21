<!-- update_employee.php -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the employee ID is provided
    if (!isset($_POST['id'])) {
        echo "Employee ID not provided.";
        exit();
    }

    $employeeId = $_POST['id'];

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

    // Retrieve the updated employee data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $departmentId = $_POST['department'];
    $hireDate = $_POST['hire_date'];

    // Update the employee information in the database
    $sql = "UPDATE employees SET name = '$name', email = '$email', designation = '$designation', department_id = '$departmentId', hire_date = '$hireDate' WHERE id = $employeeId";

    if ($conn->query($sql) === TRUE) {
        echo "Employee updated successfully.";
    } else {
        echo "Error updating employee: " . $conn->error;
    }

    $conn->close();
}
?>
