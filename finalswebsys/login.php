<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once("DbaseConnection/connection.php");
$conn = dbconnect();

if(isset($_POST['login']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];

    $sql = "select * from emp_users where username = '$username' and password = '$password'"; 
    $user = $conn->query($sql) or die ($conn->error);
    $row = $user->fetch_assoc();
     $total = $user ->num_rows;

    if($total>0)
    {
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];
        echo header("Location:index.php");
    }else{
        echo "No User found";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="logo.png" type="image/ico">

</head>
<body>
    
    
    <form class = "box" action="" method="post">
    <h1>Login Page </h1>
    <br>
        <label>Username</label>
        <input type="text" name="username" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <button class ="btnsubmit" type="submit" name="login">Login</button>

    </form>



</body>
</html>