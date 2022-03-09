<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
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
                    <img src="images/logo2.png" width="125px">
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
    </div>
</div>

<div class="small-container">
          


          <div class="row row-2">
           <h2 class="title">RL Raul's Trading Shop</h2>
           </div>
              <!---------offer--------->
              <div class="offer">
               <div class="small-container">
                   <div class="row">
                       <div class="col-2">
                           <img src="images/diornyork.png" class="offer-img">
                       </div>
                           <div class="col-2">
                        <p>Exclusively Hottest Now!</p>
                        <h1>Miss Dior Blooming Bouquet<br>₱500.00</h1>
                        
                        <small>Miss Dior Blooming Bouquet by Dior is a Floral fragrance for women. Miss Dior Blooming Bouquet was launched in 2014. The nose behind this fragrance is Francois Demachy. Top note is Sicilian Mandarin; middle notes are Pink Peony, Damask Rose, Apricot and Peach; base note is White Musk.</small>

                       </div>
                   </div>
               </div>
           </div>
</div>
</div>
<!-- Displaying Products Start -->
 <div class="container">
    <div id="message"></div>
    <div class="row">
      <?php
  			include 'dbconfig.php';
  			$stmt = $conn->prepare('SELECT * FROM product where id <= 6');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-4">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="260">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><span>&#8369;</span>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn">  &nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

  <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/Drip.jpg" class="offer-img">
                </div>
                    <div class="col-2">
                 <h1>Shirts On Sale</h1>
                 <h4>30% OFF</h4>
                 <p>The popular fashion retailer is offering an extra 30 percent discount on clearance perfume and shirts from Marychille Reano  with coupon code 'DETAILS'.</p>
                </div>
            </div>
        </div>
    </div>
               </div>
            </div>
        </div>
        
<div class="container">
    <div id="message"></div>
    <div class="row">
      <?php
  			include 'dbconfig.php';
  			$stmt = $conn->prepare('SELECT * FROM product where id > 6');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-4">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><span>&#8369;</span></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn">&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
   
      
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
<p class="copyright">Copyright 2021 YU, YANGA, PRECLARO </p>
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
    </script>


</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
 ?>