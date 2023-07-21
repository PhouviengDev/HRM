<!-- delete_department.php -->
<?php
// Check if the department ID is provided
if (!isset($_GET['id'])) {
    echo "Department ID not provided.";
    exit();
}

$departmentId = $_GET['id'];

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

// Delete the department from the database
$sql = "DELETE FROM department WHERE id = $departmentId";

if ($conn->query($sql) === TRUE) {
    header("location:display_department.php");
    exit(0);
    echo "Department deleted successfully.";
} else {
    echo "Error deleting department: " . $conn->error;
}

$conn->close();
?>
