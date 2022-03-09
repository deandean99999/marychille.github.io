<?php
include_once("DbaseConnection/connection.php");
$conn=dbconnect();

if(isset($_POST['submit'])){
    //echo"Submitted";
    //echo $_POST['firstname'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    
    
$sql = "INSERT INTO `tblemployee`(`first_name`, `last_name`, `email`, `gender`, `image`) 
VALUES ('$fname',
'$lname', 
'$email', 
'$gender', 
'$image')";

$conn->query($sql) or die($conn->error);
echo header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <link rel="icon" href="logo.png" type="image/ico">
    <title>Be part of us</title>
</head>
<body>
    <div class="login-wrapper">
    <form action="" method="post">
        <h2>Be part of us</h2>
        <div class="input-group">
        <br>

        <input type="text" class=""form-control" id="firstname" name="firstname" placeholder= "First Name" required>
        </div>
    <div class="input-group">
    <br>

    <input type="text" class=""form-control" id="lastname" name="lastname" placeholder = "Last Name" required>
</div>

<div class="input-group">
        <br>

        <input type="email" class=""form-control" id="email" name="email" placeholder = "E-Mail" required>
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
    <br>
    <br>
    <br>

</div>
    </form>
</div>
</body>
</html>