 <link rel="stylesheet" href="scrap_display.css" />

 <form action="scrap_searchresult.php" method="POST">
  <input type="text" name="result" placeholder="Search anything"  >

  <button type="submit"> <img src="icons/search.png" > </button>
</form>
<br>
<br>
<br>
<?php
 require_once "1)config.php";

$res= $_POST["result"];

$query= "Select * from scrap where sname= '$res'";

// $query1= "Select * from scrap where sname= '$res'";

$result= mysqli_query($connection, $query);
// $result1= mysqli_query($connection, $query);
// $i=0;
// while($row= mysqli_fetch_assoc($result1)){
$rows= mysqli_num_rows($result);
    // $i++;

?>
<span><?php echo $rows?>  items found for "<?php echo $res ?>"</span> 
<br>
<br><br>

<?php
    while($row= mysqli_fetch_assoc($result)){
        ?>
           <a class="link" href="scrap_details.php?id=<?php echo $row['id'];?>">

     
        
        <div class="box">


          <div class="image">

            <span><img src ="scrap/<?php echo $row["simage"]?>" height = '240px' width= '220px'></span> <br><br>
          </div>
    
         <div class="details">

           <span class="title"> 
             <?php echo $row["sname"]?> <br> 

           </span>
           <span class="price">

             <?php echo $row["sprice"]?><br>
           </span>
          </div>
         <br>
           <br>

        </div>
        </a>
        <?php 
        }
        ?>

