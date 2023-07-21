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

// Retrieve request ID and action from the form submission
$request_id = $_POST['request_id'];
$action = $_POST['delete'];

// Delete the leave request from the table
$sql = "DELETE FROM leave_requests WHERE id = '$request_id'";

if ($conn->query($sql) === TRUE) {
    echo "Leave request deleted successfully.";
} else {
    echo "Error deleting leave request: " . $conn->error;
}

$conn->close();
?>
