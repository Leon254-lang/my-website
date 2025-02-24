<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h2>Welcome to the Home Page</h2>
    <p>You are successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>