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

// Retrieve department data from the form submission
$d_name = $_POST['d_name'];
$short_name = $_POST['short_name'];
$code = $_POST['code'];

// Prepare and execute the SQL query to insert department data
$sql = "INSERT INTO department (d_name, short_name, code) VALUES ('$d_name', '$short_name', '$code')";

if ($conn->query($sql) === TRUE) {

    header("location:display_department.php");
    exit(0);
    echo "Department data inserted successfully.";
} else {
    echo "Error inserting department data: " . $conn->error;
}

$conn->close();
?>
