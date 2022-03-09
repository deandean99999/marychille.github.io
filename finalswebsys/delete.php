<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_profile";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}


$id = isset($_GET['ID']) ? $_GET['ID'] : '';
$id = $_GET['ID'];

$sql = "Delete from tblemployee WHERE id = $id";

if($conn->query($sql) === TRUE)
{
  $conn -> close();
  header("location:index.php");
  exit;
}
else
{
    echo "Error deleting record " . $conn-> error;
}

?>