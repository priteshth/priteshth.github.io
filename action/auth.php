<?php
session_start();
require '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "" || $password === "") {
        echo "Error! Please fill all the fields";
        exit;
    }
    $uname = $db->query("SELECT * FROM `user` WHERE `username` = '$username'");

    if ($uname && $uname->num_rows > 0) {
        $row = $uname->fetch_assoc();
        $pass = $row['password'];

        if ($password === $pass) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $username;
            header("Location: ../dashboard.html");
            exit;
        } else {
            echo "Incorrect Password";
        }
    } else {
        echo "Incorrect Username";
    }
}
?>