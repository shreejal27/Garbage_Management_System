
<?php require_once "1)config.php"; 

$id= $_GET['id'];

$query = "SELECT * FROM scrap WHERE id= '$id' ";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);
?>

<?php
$cookie= $_COOKIE['quantity'];
?>


<div>

    <a href="scrap_address.php"> Add Your Address </a>
</div>

<div>

    <div style="background-color: blue;">
    <span class="image">

<img src ="scrap/<?php echo $row["simage"]?>" height = '50px' width= '50px'>
</span>
    <span style="font-size: 30px;"> 
        <?php echo $row["sname"]?> 
    </span>
    <span>
        Qty: <?php echo $cookie?>
    </span>
    <span>
        Rs: <?php echo $row['sprice']?>
    </span>

    </div>
    <div style="float: right; background-color: yellow";>
     SubTotal: Rs. <?php echo ($cookie* $row['sprice'])?>
    </div>
    <br>
    <a href="scrap_confirm" style="float: right;"><button> Confirm Sell</button></a>
</div>

