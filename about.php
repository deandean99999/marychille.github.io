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
    <title>ABOUT</title>
    <link rel="stylesheet" href="about.css">
    <link rel="icon" href="images/Logo2.png" type="image/ico">

</head>
<body>
  <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Logo2.png" width="125px">
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
        <div class="about-section">
          <h1>About Us </h1>
          <br>
          <paragraph >Here at Marychille's Perfumes and Apparel, we realize that style and prosperity begin with the correct fashion.</paragraph>
          <paragraph >We likewise understand that effectivelyfinding the size and style to meet your requirements is vital to your web based shopping knowledge.</paragraph>
          <paragraph>We pride ourselves on conveying hard-to-discover styles, sizes and widths since we realize that each individual’s needs contrast.</paragraph>
        </div>
        <br>
        <h2 style="text-align:center">About My self</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="images/logologo.jpg" class = "CEO" alt="Dean" style="width:100%">
              <div class="container">
                <h2>Marychille Reano</h2>
                <p class="title"><b>CEO of RL Raul trading</b></p>
                <p>“Knowledge is power.” </p>
                <br>
                <p><b>chillemaryl@yahoo.com</b></p>
                <br>

              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="images/plmun.jpg" alt="Hans" class = "BAD" style="width:100%">
              <div class="container">
                <h2>Pamantasan Lungsod Ng Muntinlupa</h2>
                <p class="title"><b>School</b></p>
                <p>“Pamantasan ng Lungsod ng Muntinlupa is a local university in the Philippines.”</p>
                <br>
                <p><b>University Road, Muntinlupa, Metro Manila 1776</b></p>
                <br>

              </div>
            </div>
          </div>

              </div>
            </div>
          </div>
        </div>
</body>
</html>
<?php
}else{
  header("Location: index.php");
  exit();
}
 ?>