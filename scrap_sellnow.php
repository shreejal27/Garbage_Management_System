
<?php require_once "1)config.php"; 

$id= $_GET['id'];

$query = "SELECT * FROM scrap WHERE id= '$id' ";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);

$category = $row['category'];
?>

<?php
$cookie= $_COOKIE['quantity'];
?>
<style>
    body{
        margin-left: 10%;
        margin-right: 10%;
        background-color: lightgreen;
    }
/* #addressbar{
    width: 100%;
    height: 20px;
    padding: 30px 0;
    outline: 1px solid black;
    margin: 20px 0px; 
    background-color: green;
    border-radius: 10px;
} */
a{
    color: cornsilk;
    font-size: 20px;
    text-decoration: none;
}

#productbox{
    width: 100%;
    height: 450px;
    outline: 1px solid black;
    /* border-radius: 10px; */
    padding: 10px;
    margin-top: 10%;
    float: left;
    background-color: cornsilk;
}

.details{
    float:left; 
    font-size: 32px;
    margin: 10px;
    margin-top: 30px;
    margin-left: 20%;
}
.pickup{
    height: 100px;
    width: 200px;
    outline: 1px solid black;
    margin-top: 150px;
    font-size: 20px;
    padding: 5px;
    text-align: center;
    /* border-radius: 5px; */
    background-color: green;
    
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
#form-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid black;
  }

    </style>
    <div id="main">

    </div>
    
    <div id = "productbox">
        <p style="font-size:24px;"> Sell Now </p>
    
    <div class="image" style="float:left; ">
        <img src ="scrap/<?php echo $row["simage"]?>" height = '100px' width= '100px' style=" object-fit:contain;">
    </div>
    
    <div class = "details">  
        <?php echo $row["sname"]?> 
    </div>
    <div class = "details">
        Qty: <?php 
        echo $cookie;
        if ($category == "glass"){
            echo "/pc";
          }
          else{
            echo "/kg";
          }
        ?>
    </div>
    <div class = "details">
        Rs: <?php echo $row['sprice']?>
    </d>
    </div>
    <!-- <br>
    <br>
    <br>
    <br>
    <br>
    <br> -->
    <div class="pickup">
        <p>Standard PickUp</p>
        <p>Free</p>   
     </div>

        <div class="sell">
            SubTotal: Rs. <?php echo ($cookie* $row['sprice'])?>
            <br>
            <button> <a class= "button" href="scrap_address.php" >Confirm Sell</a></button>
        </div>


        </div>
       

        <script>
           
         

 

            
        </script>