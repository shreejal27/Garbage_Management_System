<?php require_once "1)config.php"; ?>
<?php

$query= "Select * from scrap";

$result= mysqli_query($connection, $query);
?>
<style>
  .link{
    color: green;
  }
  a{
        color: green;
        padding: 10px;
    }
  div{
    padding: 50px;
    margin: 30px;
    overflow: auto;
  }
  .align{
    text-align: center;
  }
</style>
        <?php
    while($row= mysqli_fetch_assoc($result)){
        ?>
        

        <div class="box" style="color: black; float: left; border: 1px dotted black;">

 
          <span><img src ="scrap/<?php echo $row["simage"]?>" height = '100px' width= '100px'></span> <br><br>
         <br>
            <?php echo $row["sname"]?> <br>
           <?php echo $row["sprice"]?><br>
         <br>
           <br>
            <span>
             <a class="link" href="scrap_update.php?id=<?php echo $row['id'];?>"> Update </a>
            </span>

            <span>
             <a class="link" href="scrap_delete.php?id=<?php echo $row['id'];?>"> Delete </a>
            </span>
  
        </div>
        <?php 
        }
        ?>