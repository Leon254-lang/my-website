<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Check credentials
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: home.php");
} else {
    echo "Invalid email or password. <a href='login.html'>Try again</a>";
}

$conn->close();
?>