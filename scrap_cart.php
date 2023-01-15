<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php

$cookie = $_COOKIE['cart'];

$grandtotal=0;

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

            $category = $row['category'];
            ?>
            <center>

              <div id = "productbox">
                <div class="image" style="float:left; ">
                  <img src ="scrap/<?php echo $row["simage"]?>" height = '150px' width= '150px' style=" object-fit:contain;">
                </div>
                <div class = "details" id=  "name<?php echo ++$i?>" value="<?php echo $id?>">  
                  <?php echo $row["sname"]?> 
                </div>
                <div class = "details" id="qty<?php echo ++$i?>">
                  Qty: <?php 
                  echo $qty;
                  if ($category == "glass"){
                    echo "/pc";
                  }
                  else{
                    echo "/kg";
                  }
                  ?>
                </div>
        <div class = "details">
          Rs: <?php 
          echo $row['sprice'];
        
          ?>
        </d>
      </div>
        
 
        <i class="fa fa-trash-o" style="font-size:35px; cursor: pointer; margin-top: 30px;"  onclick="deletee(<?php echo $i?>)"></i>
      
        <br>
    <br>
    <br>
    <br>
    <br>
      <div class="sell">

        SubTotal: Rs. <?php 
        echo ($qty* $row['sprice']);
        $grandtotal =   $grandtotal+ ($qty* $row['sprice']);
        ?>
        <br>
      </div>
    </center>
    <?php
  }

  ?>
 
    <span id="grandtotal"> Grand Total : <?php echo $grandtotal;?></span> <br><br><br>
    <button> <a class= "button" href="scrap_address.php">Confirm Sell</a></button>
  <?php
}

else{
  print_r("Cart is empty");
}
?>
<script type="text/javascript">
  function deletee(value){
    // var sname = document.getElementById("name"+(value-1)).innerHTML;
    var sname = document.getElementById("name"+(value-1)).getAttribute('value');
    // var sprice = document.getElementById("qty"+value).innerHTML;
    deleteFromCart(sname);
    window.location.reload();
  }
  function deleteFromCart(itemToDelete) {
  // Get the current value of the 'cart' cookie
  var cookieValue = getCookie('cart');

  // Parse the cookie value to extract the items in the cart
  var items = JSON.parse(cookieValue);
  console.log(cookieValue);

  // Remove the item to delete from the array
  delete items[itemToDelete];

  // Serialize the modified array back into a string
  cookieValue = JSON.stringify(items);

  // Set the 'cart' cookie with the modified value
  setCookie('cart', cookieValue, 7);

}

  function getCookie(name) {
                    // Split the cookies string into an array
                    var cookies = document.cookie.split(";");
                    
                    // Find the cookie with the specified name
                    for (var i = 0; i < cookies.length; i++) {
                        var cookie = cookies[i].trim();
                        // Check if the cookie starts with the name followed by '='
                        if (cookie.indexOf(name + "=") == 0) {
                        // Return the value of the cookie
                        return cookie.substring(name.length + 1);
                        }
                    }
          
                    // If the cookie was not found, return an empty string
                    return "";
                    }

                        
                    function setCookie(name, value, days) {
                    // Create a date object for the expiration date
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "expires=" + date.toUTCString();
                    
                    // Set the cookie string
                    document.cookie = name + "=" + value + ";" + expires + ";path=/";
         
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
          margin: 10px;
          /* border-radius: 5px; */
          background-color: green;
          
      }
      .button{
          font-size: 16px;
      }

      #grandtotal{
        float: right;
        margin-right: 10px;
        margin-top: 10px;
      
        font-size: 32px;
      }

 </style>

