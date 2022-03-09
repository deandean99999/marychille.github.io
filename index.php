<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/logo2.png" type="image/ico">

</head>
<body>
    <div class="container">
        <div class="myform">
        <form action="login.php" method="post">
                <h2>LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
                <input type="text" name = "e-mail" placeholder="Email">
                <input type="password" name = "password" placeholder="Password">
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="registration.php">Register now</a>.</p>
            </form>
        </div>
        <div class="image">
            <br>
            <img src="images/perfumeprod.png" width="400px">
        </div>
    </div>
</body>
</html>