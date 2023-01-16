<?php
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="topleft">
                <p><strong><a href="index.php" target="_blank">Garbage Management System </strong></a></p>
            </div>
          <div class="topright">
            <ul>
          
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="index.html">About Us</a></li>
              <li><a href="driverform.html">Become A Driver</a></li>
              <?php
              if(!isset($_SESSION['username'])){
              ?>
              <li><a href="login.html">Log In</a></li>
           <?php  } else { ?>
              <li><a href="index.php">Hello <?php echo $_SESSION['username']?></a></li>
              <li><a href="logout.php">Logout</a></li>
             <?php } ?>
             <li><a href="scrap_cart.php"><i class="fa fa-shopping-cart" style="font-size:36px"></i></a></li>
              </ul>
           
          </div>
        </header>


    </body>
</html>