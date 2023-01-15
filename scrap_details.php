<?php require_once "1)config.php"; 
session_start();

$id= $_GET['id'];

$query = "SELECT * FROM scrap WHERE id= '$id' ";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);
 $scrapname = $row["sname"];
 $category = $row["category"]

?>
<style>
  body{
 
    background-color: lightgreen;
  }
    .mainbox{
        height:500px;
        width: 1000px;
        margin-left: 15%;
        margin-top: 5%;
       background-color: cornsilk;
    }
    .image{
        padding:10%;
        float: left;
 
    }
    .details{
      
        padding-top: 10%;
     
        
    }
    button{
        border:none;
    }
    #sell,#add{
        width: 160px;
        height: 40px;
        color: white;
    }
    #sell{
        background-color: darkgreen;
    }
    #sell:hover{
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
  box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
    }
    #add{
        background-color: lightgreen;
    }
    #add:hover{
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
  box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
    }
</style>

<div class= "mainbox">
      <div class="image">

         <img src ="scrap/<?php echo $row["simage"]?>" height = '300px' width= '300px'   style=" object-fit:contain;">
      </div>

      <div class="details"> 
      <span style="font-size: 50px;"> 

          <?php echo $row["sname"]?> <br> <br>
      </span>
      <span style="font-size: 30px;">
          
          Rs: <?php 
          echo $row["sprice"] ;
          if ($category == "glass"){
            echo "/pc";
          }
          else{
            echo "/kg";
          }
          ?>
      </span>
      <br> <br> <br>
       <span style="font-size: 20px;">
        Quantity 
       </span>
       <button onclick="decrease()" style="margin:15px;">-</button>
            <span id="counter">1</span>
            <button onclick="increase()" style="margin:15px;">+</button>
           

        <br> <br><br>
    
      <a href="scrap_sellnow.php?id=<?php echo $row['id'];?>"> <button id="sell" >Sell Now</button></a>

 
      <button id="add" onclick="add()">Add To Cart</button> 
     </div>


</div>

<script type="text/javascript">
    var sname = "<?php echo $scrapname; ?>";
    var sid = "<?php echo $id; ?>";
    var data = 1;
    document.getElementById("counter").innerText = data;

  function increase() {
      data = data + 1;
      document.cookie="quantity="+data;
      document.getElementById("counter").innerText = data;
   
  }
 
  function decrease() {
      data = data - 1;
      if (data < 1){
        data= 1;
      }
      document.cookie="quantity="+data;
      document.getElementById("counter").innerText = data;
     
  }
  function add(){
      var result = confirm("One Item " + sname + " Has Been Added To Your Cart");
      
      if (result == true){
        addToCart(sid, data);
        
        function addToCart(item, quantity) {
            // Get the current cart from the cookie
            var cart = getCookie("cart");
            
            // If the cart is empty, create an empty object
            if (cart == "") {
                cart = {};
            } else {
                // If the cart is not empty, parse the cookie string into an object
                cart = JSON.parse(cart);
            }
            
            // Check if the item is already in the cart
            if (item in cart) {
                // If it is, update the quantity
                cart[item] += quantity;
            } else {
                // If it isn't, add the item to the cart with the specified quantity
                cart[item] = quantity;
            }
            
            // Save the updated cart object to the cookie
            setCookie("cart", JSON.stringify(cart), 365);
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
                    
                        
        }
  }
</script>

