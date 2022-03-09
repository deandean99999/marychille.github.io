<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
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
$phonenumberinput = $conn->real_escape_string($_REQUEST['phonenumber']);
$messageinput = $conn->real_escape_string($_REQUEST['message']);
$checker = 0;



if ($stmt = $conn->prepare("SELECT `name`, `email`, `phonenumber`, `message` FROM `contactus` WHERE `email` = ?")){
  $stmt->bind_param("s", $emailinput);
  $stmt->execute();
  $stmt->store_result();
  if($stmt->num_rows > 0) {

    
    $checker=1;
   } 
}

if ($checker == 0)
{
  $sql = "INSERT INTO contactus (name, email, phonenumber, message)
VALUES ('$nameinput','$emailinput','$phonenumberinput','$messageinput')";



if($conn -> query($sql) === TRUE)
{
  echo "<script>alert('Your message has been recorded!')</script>";
}
}
else{

  echo "<script>alert('This email is already in use.')</script>";


}
$conn->close();
}

?>
<body>

<div class="header">
<div class="container">
    <div class="navbar">
        </div>
        <nav>
            <ul id="MenuItems">
            <li><a href="mainwebsite.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="logout.php">Logout</a> </li>
                <li> <h1> Hello, <?php echo $_SESSION["name"]; ?> </h1> </li>

            </ul>
        </nav>
    </div>

    



<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>CONTACT US</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
				<input type="text" name="name" class="field" placeholder="Your Name" required>
				<input type="text" name="email" class="field" placeholder="Your Email"required>
				<input type="text" name="phonenumber" class="field" placeholder="Phone"required>
				<textarea placeholder="Message" name="message" class="field"required></textarea>
				<input type="submit" class = "btn" name="submit" value="Send">
			</div>
		</div>
	</div>
</form>
    
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
 ?>