<?php
session_start();
require '../database/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "" || $password ==""){
        echo("Error! please fill all the fields");
    }
    $uname = $db->query("SELECT * FROM `user` WHERE `username` = $username");
    $row = $uname->fetch_assoc();
    $pass = $row['password'];
    
    if ($password == $pass){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;
        header("loaction: ../dashboard.html");
    }
    else{
        echo("Incorrect Password");
    }
}

?>