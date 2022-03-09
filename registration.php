<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="icon" href="images/Logo2.png" type="image/ico">
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$conn = new mysqli("localhost", "root",  "" ,"midterms");
 
if($conn-> connect_error){
    die("Connection failed: " . $conn-> connect_error);
}
$nameinput = $conn->real_escape_string($_REQUEST['name']);
$emailinput = $conn->real_escape_string($_REQUEST['email']);
$birthdayinput = $conn->real_escape_string($_REQUEST['birthday']);
$genderinput = $conn->real_escape_string($_REQUEST['gender']);
$passwordinput = $conn->real_escape_string($_REQUEST['password']);
$checker = 0;



if ($stmt = $conn->prepare("SELECT `name`, `email`, `birthday`, `gender` FROM `regisform` WHERE `email` = ?")){
  $stmt->bind_param("s", $emailinput);
  $stmt->execute();
  $stmt->store_result();
  if($stmt->num_rows > 0) {

    
    $checker=1;
   } 
}

if ($checker == 0)
{
  $sql = "INSERT INTO regisform (name, email, birthday, gender, password)
VALUES ('$nameinput','$emailinput','$birthdayinput','$genderinput','$passwordinput')";



if($conn -> query($sql) === TRUE)
{
  
  $message = "<script>alert('New Record Created Successfully')</script>";
  echo $message;

}
}
else{
  $messag2 = "<script>alert('This email is already in use.')</script>";
  echo $messag2;


}
$conn->close();
}

?>
<body>
<h2> REGISTRATION FORM </h2>
<br>

    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="name" id="" placeholder="NAME" autofocus requiredz>
           <br><br><br>
           <br><br><br>

           <input type = "email" name = "email" id=""placeholder="EMAIL" required>
           <br><br><br>
           <br><br><br>
          <input type = "date" name = "birthday" id="" required>
          <br><br><br>
          <br><br><br>
          <input type = "radio" name = "gender" value="Male" checked>MALE
           &nbsp; <input type = "radio" name = "gender" value = "Female">FEMALE
           <br><br><br>
           <br><br><br>

        <input type = "password" name = "password" id="" placeholder="password" required>
         <br><br><br>
         <br><br><br>
            <input type = "submit" name = "submit" id ="register" value ="Submit">
            <p>Already have an account? <a href="index.php">Login now</a>.</p>
       
</form>


        
</body>
</html>