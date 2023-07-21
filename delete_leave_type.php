<?php
// Check if the leave type ID is provided
if (!isset($_GET['id'])) {
    echo "Leave type ID not provided.";
    exit();
}

$leaveTypeId = $_GET['id'];

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

// Delete the leave type from the database
$deleteSql = "DELETE FROM leave_types WHERE id = ?";
$stmt = $conn->prepare($deleteSql);
$stmt->bind_param("i", $leaveTypeId);

if ($stmt->execute()) {

    header("location:display_leave_type.php");
    exit(0);
    echo "Leave type deleted successfully.";
} else {
    echo "Error deleting leave type: " . $conn->error;
}

$conn->close();
?>
