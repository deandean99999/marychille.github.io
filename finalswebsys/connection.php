<?php

function dbconnect()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_profile";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
else{
    return $conn;
}
}

?>
