<!-- update_department.php -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input data
    $departmentId = $_POST['id'];
    $d_name = $_POST['d_name'];
    $shortName = $_POST['short_name'];
    $code = $_POST['code'];

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

    // Update the department details in the database
    $sql = "UPDATE department SET d_name='$d_name', short_name='$shortName', code='$code' WHERE id=$departmentId";

    if ($conn->query($sql) === TRUE) {
        echo "Department updated successfully.";
        header("location:display_department.php");
         exit(0);
    } else {
        echo "Error updating department: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
