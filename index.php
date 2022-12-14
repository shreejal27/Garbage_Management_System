<html>
  <head>
    <title>Garbage Management System</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="headerfooter.css" />
  
  </head>
  <body>
  <?php
   include_once "header.php";
   ?>
    <div id="mainbox">
      <section class="top">
        <div class="iconbox-top">
             <a href="garbagevan.html">
            <div class="icon-logo" id="logo1"></div>
            <div class="icon-title">
              <p>Track Your Garbage Van</p>
            </div>
          </a>
        </div>
        <div class="iconbox-top">
          <a href="dustbin.php">
            <div class="icon-logo" id="logo2"></div>
            <div class="icon-title">
              <p>LookOut For Dustbins</p>
            </div>
          </a>
        </div>
      </section>
      <section class="bottom">
        <div class="iconbox-bottom">
          <a href="Complain.php" onclick="checklogin()">
            <div class="icon-logo" id="logo3"></div>
            <div class="icon-title">
              <p>Report A Complain</p>
            </div>
          </a>
        </div>
        <div class="iconbox-bottom">
          <a href="Recycler.php" onclick="checklogin()">
            <div class="icon-logo" id="logo4"></div>
            <div class="icon-title">
              <p>Wanna Sell Your Junk</p>
            </div>
          </a>
        </div>
      </section>
    </div>
 <?php
 include_once "footer.php"
 ?>
  </body>
</html>

<script>
  function checklogin(){

    if (!$_SESSION['name']){
      window.location.href = "login.html";
      alert('You are not logged in! Please login to access this feature');

    }
  }
</script>