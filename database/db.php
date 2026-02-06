<?php
$servername = "localhost";
$username="root";
$password = "";
$dbname = "todo";

$db = new mysqli($servername, $username, $password, $dbname);

if($db->connect_error){
    echo $db->connect_error;
}

?>