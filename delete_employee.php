<!-- delete_employee.php -->
<?php
// Check if the employee ID is provided
if (!isset($_GET['id'])) {
    echo "Employee ID not provided.";
    exit();
}

$employeeId = $_GET['id'];

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

// Delete the employee from the database
$sql = "DELETE FROM employees WHERE id = $employeeId";

if ($conn->query($sql) === TRUE) {
    header("location:display_employee.php");
    exit(0);
    echo "Employee deleted successfully.";
} else {
    echo "Error deleting employee: " . $conn->error;
}

$conn->close();
?>
