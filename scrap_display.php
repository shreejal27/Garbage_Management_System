<?php require_once "1)config.php"; ?>
<?php

$query= "Select * from scrap";

$result= mysqli_query($connection, $query);
?>


 <link rel="stylesheet" href="scrap_display.css" />



<form action="scrap_searchresult.php" method="POST">
  <input type="text" placeholder="Search anything"  >

  <button type="submit"> <img src="icons/search.png" > </button>
</form>

    <h2> Most Sold</h2>

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