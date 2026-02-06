<?php
require '../database/db.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "" || $password ==""){
        echo("Error! please fill all the fields");
    }
    $sql = $db->query("INSERT INTO `user`(`username`, `password`) VALUES ('[$username]','[$password]')");
    if(isset($sql)){
        header("location: ../login.php");
    }
}
?>
