<?php 

require_once 'auth_check.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Scrap Goods</title>
    <link rel="stylesheet" href="headerfooter.css" />
  </head>

  <style type="text/css">
    * {
      margin: 0px;
      padding: 0px;
    }
    body {
      font-family: arial;
    }
    .main {
      margin: 2%;
    }

    .card {
      width: 20%;
      display: inline-block;
      box-shadow: 2px 2px 20px black;
      border-radius: 5px;
      margin: 2%;
    }

    .image img {
      height: 200px;
      width: 100%;
      border-top-right-radius: 5px;
      border-top-left-radius: 5px;
    }

    .title {
      text-align: center;
      padding: 10px;
    }

    h1 {
      font-size: 20px;
    }

    .des {
      padding: 3px;
      text-align: center;

      padding-top: 10px;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
    }
    button {
      margin-top: 40px;
      margin-bottom: 10px;
      background-color: white;
      border: 1px solid black;
      border-radius: 5px;
      padding: 10px;
    }
    button:hover {
      background-color: black;
      color: white;
      transition: 0.5s;
      cursor: pointer;
    }
  </style>
  <body>
    <?php
   include_once "header.php";
   ?>
   <br><br><br><br><br>
    <center style="margin-top: 50px"><h1>Value Of Scrap Goods</h1></center>
    <div class="main">
      <div class="card">
        <div class="image">
          <img src="img/0x0.jpg" />
        </div>
        <div class="title">
          <h1>Books</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/Stack-newspapers-background.webp" />
        </div>
        <div class="title">
          <h1>Newspapers</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/bottles.jpg" />
        </div>
        <div class="title">
          <h1>Bottels</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/metals.jpg" />
        </div>
        <div class="title">
          <h1>Recycling Metals</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/Recycled-Clothing.jpg" />
        </div>
        <div class="title">
          <h1>Recycle clothes</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/cd.jpg" />
        </div>
        <div class="title">
          <h1>Clothes Donation</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/tree.jpg" />
        </div>
        <div class="title">
          <h1>Tree Plantation</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>

      <div class="card">
        <div class="image">
          <img src="img/metals.jpg" />
        </div>
        <div class="title">
          <h1>Recycling</h1>
        </div>
        <div class="des" style="margin-bottom: 20px">Rs 10/kg</div>
      </div>
    </div>
    
    <div>
        <center>Have any queries or prefer speaking over the phone? </center>
        <div style="float: left; width:50%"> 
        GENERAL INQUERIES <br>
      +977 984152630 <br>
      Garbage@management.com</div>
        <div style="width: 50%; float: left;">
        BOOK A PICK UP <br>
        +977 984152630 
      </div>
    </div>
    <br><br><br><br><br>
    <?php
    include_once "footer.php"
    ?>
  </body>
</html>
