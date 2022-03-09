<?php
include_once("DbaseConnection/connection.php");
$conn=dbconnect();

$id = $_GET['ID'];
$sql = "SELECT * FROM tblemployee where id = '$id' ";
$result = $conn->query($sql) or die($conn->error);
$row = $result -> fetch_assoc();

if(isset($_POST['submit'])){
    //echo"Submitted";
    //echo $_POST['firstname'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $image = $_POST['image'];
$sql = "Update tblemployee set first_name= '$fname',
last_name = '$lname',
email = '$email',
gender = '$gender', 
image = '$image' where id = '$id'";
$conn->query($sql) or die($conn->error);
echo header("Location: details.php?ID=" .$id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <link rel="shortcut icon" type="image/png" href="img/hotdog.png">
    <title>Be part of us</title>
</head>
<body>
    <div class="login-wrapper">
    <form action="" method="post">
        <h2>Be part of us</h2>
        <div class="input-group">
        <br>

        <input type="text" class=""form-control" id="firstname" name="firstname" required>
        <label for="firstname">First Name</label>
        </div>
    <div class="input-group">
    <br>

    <input type="text" class=""form-control" id="lastname" name="lastname" required>
    <label for="lastname">Last Name</label>
</div>

<div class="input-group">
        <br>

        <input type="email" class=""form-control" id="email" name="email" required>
        <label for="email">Email</label>
        </div>


<div class="txt_field">
<p>Please select your gender:</p>
<br>

  <input type="radio" id="gender" name="gender" value="Male" checked>
  <label for="gender">Male</label><br>
  <input type="radio" id="gender" name="gender" value="Female">
  <label for="gender">Female</label><br>
  <input type="radio" id="gender" name="gender" value="Non-Binary">
  <label for="javascript">Non-Binary</label>


        <br>
        <br>
        <label for= "image"> Upload your profile picture: </label><br>
        <input type="file" id="image" name="image" required>
      
        
    </form>
    <br>
    <br>
    <div class="submit-btn">
    <input type="submit" name="submit" value="Register">
</div>
    </form>
</div>
</body>
</html>