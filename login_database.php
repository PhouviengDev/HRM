<?php
// Connect to the database
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "employee_leave_management";

$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT id, password, level FROM employees WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($userId, $hashedPassword, $userLevel);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        // Successful login

  // After successful login
  session_start();
  $_SESSION['username'] = $username; // Store the username in the session

        if ($userLevel === 'admin') {
            // Admin specific actions
            // echo "Welcome " . $username;
            header("Location: admin_page.php");
            exit();
        } else {
            // Regular user actions
            // echo "Welcome ". $username. " $userId";
            header("Location: user_page.php");
            exit();
        }
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>