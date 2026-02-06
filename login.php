<?php
session_start();
if (isset($_SESSION['userid'])){
    header("location: ../dashboard.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | To-Do</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Login</h2>
    <form action="action/auth.php" method="post">
        <input type="text" name = "username" placeholder="Enter your username" id = "username"><br>
        <input type="password" name = "password" placeholder="Enter your password" id = "password"><br>
        <button type="submit">Login</button><br>
    </form>
    <button><a href="register.php">Create New Account</a></button>
</body>
</html>