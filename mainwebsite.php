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
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
    <div class="row">
        <div class="col-2">
<h1>Every day is a fashion show <br> and the world is your runway!</h1>
<p>When you have a lot of confidence and you feel like nobody can beat you,<br> it’s game over for everyone else.</p>
<a href="products.php" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="images/tumblr.jpg">
 </div>
    </div>
</div>
</div>

        
        
    </div>
</div>
   <!------ featured products------>
       <div class="small-container">
           <h2 class="title">Featured Products</h2>
           <div class="row">
               <div class="col-4">
                   <img src="images/perfumeprod.png">
                   <h4>Perfumes </h4>
                   <a href="products.php"class="btn">Visit</a>
                </div>
               
               <div class="col-4">
                <img src="images/shirts.png">
                <h4>Shirts </h4>
                <a href="products.php"class="btn">Visit</a>
                </div>
               
                <div class="col-4">
                    <img src="images/ShoesWomen.png">
                    <h4>Shoes </h4>
                    <a href="products.php"class="btn">Visit</a>
                    </div>
                    
                  
            </div>
           </div>

                        <!---------offer--------->
                        <div class="offer">
                            <div class="small-container">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="images/eabab.png" class="offer-img">
                                    </div>
                                        <div class="col-2">
                                     <p>Exclusively Available Now!</p>
                                     <h1>Nike Sportswear Women's T-Shirt<br>₱250.00</h1>
                                     <small>Love is in the Swoosh and this tee is all about it. Made from soft cotton and with a roomy fit, it features an embroidered rose design that celebrates Valentine's Day.</small>
                                      <a href="products.php"class="btn">Buy Now &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
       </div>
   
      <!-------- testimonial-------->
      <div class="testimonial">
          <div class="small-container">
              <div class="row">
                  <div class="col-3">
                      <p>"A friend is someone who knows all about you and still loves you."</p>
                      <img src="images/marychille (1).png">
                 <h3>Marychille Reano</h3>
                  </div>
                  <div class="col-3">
                    <p>"Doing the tough things sets winners apart from losers."</p>
                    <img src="images/lizpng.png">
               <h3>Liz Duran</h3>
                </div>
                <div class="col-3">
                    <br>
                    <p>“A fake friend wouldn’t have cared. They might even have been annoyed or irritated by my reaction. Real friends make mistakes, but they own up to them and apologize.”</p>
                    <img src="images/jhaspng.png">
               <h3>Jhas Barredo</h3>
              </div>
          </div> 
      </div>
<!---------brands--------->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-nike.png">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png">
            </div>
            <div class="col-5">
                <img src="images/logo-gatorade.png.crdownload">
            </div>
        </div>
    </div>
</div>
<!----------footer---------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <p>Sneakers exists to bring inspiration and innovation to every athlete in the world. Our Purpose is to move the world forward through the power of sport.</p>
            </div>
            
                  <div class="footer-col-4">
                      <h3>Follow Us!</h3>
                      <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    </ul>
                       </div>

 </div>
    
</div>
<p class="copyright">Copyright 2021 Web Development </p>
</div>
</div>
<!----------js for toggle menu--------->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if( MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";

        }
        else
        {
            MenuItems.style.maxHeight = "0px";

        }
    }
    window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>

</body>
</html>
<?php 
}else{
    header("Location: index.php");
    exit();
}
 ?>