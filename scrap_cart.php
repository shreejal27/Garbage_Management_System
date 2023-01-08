<?php

$cookie = $_COOKIE['cart'];

// Decode the cookie value into an object
if($cookie != ""){
  $cookies = $_COOKIE['cart'];
  $array = json_decode($cookies, true);
  ?>
  <p style="font-size:24px; float:"left";> Your Cart </p>
  <?php
  $i=0;
  foreach ($array as $sid => $quantity) {
      // echo "ScrapId: $sid, Quantity: $quantity <br>";

       require_once "1)config.php"; 
            $id= $sid;
            $qty = $quantity;
            
            $query = "SELECT * FROM scrap WHERE id= '$id' ";
            $data = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($data);
            ?>
            <center>

              <div id = "productbox">
                <div class="image" style="float:left; ">
                  <img src ="scrap/<?php echo $row["simage"]?>" height = '150px' width= '150px'>
                </div>
                <div class = "details" id=  "name<?php echo ++$i?>">  
                  <?php echo $row["sname"]?> 
                </div>
                <div class = "details" id="qty<?php echo ++$i?>">
                  Qty: <?php echo $qty?>
                </div>
        <div class = "details">
          Rs: <?php echo $row['sprice']?>
        </d>
      </div>
        
    
      <button> <a class= "button" href="#" onclick="deletee(<?php echo $i?>)">Dee</a></button>
      
      
      <div class="sell">
        SubTotal: Rs. <?php echo ($qty* $row['sprice'])?>
        <br>
        <button> <a class= "button" href="scrap_confirm">Confirm Sell</a></button>
      </div>
    </center>
      
      <?php
  }
}

else{
  print_r("Cart is empty");
}
?>
<script type="text/javascript">
  function deletee(value){
    var sname = document.getElementById("name"+(value-1)).innerHTML;
    var sprice = document.getElementById("qty"+value).innerHTML;
    console.log(sname, sprice);
  }
</script>


<style>
    body{
        margin-left: 10%;
        margin-right: 10%;
        background-color: lightgreen;
    }

a{
    color: cornsilk;
    font-size: 20px;
    text-decoration: none;
}

#productbox{
    width: 100%;
    height: 200px;
    outline: 1px solid black;
    margin: 10px 0px;
    padding: 10px;
    float: left;
    background-color: cornsilk;
}

.details{
    float:left; 
    font-size: 32px;
    margin: 10px;
    margin-top: 30px;
    /* margin-left: 10%; */
    width: 275px;
}

.sell{
    margin-top: 30px;
    float: right; 
    font-size: 20px;
}
button{
    height: 40px;
    width: 200px;
    float:right;
    margin-top: 10px;
    /* border-radius: 5px; */
    background-color: green;
    
}
.button{
    font-size: 16px;
}

    </style>

<!-- <center>
    
    <div id="addressbar">
        <a href="scrap_address.php"> Add Your Address </a>
    </div>
</center>
    
 
  
    <div class="pickup">
        <p>Standard PickUp</p>
        <p>Free</p>   
     </div>


        </div> -->