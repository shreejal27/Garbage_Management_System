<?php require_once "1)config.php"; ?>
<?php

$query= "Select * from activedriver";

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
        $i=1;
    while($row= mysqli_fetch_assoc($result)){
        ?>
        

        <div class="box" style="color: black; float: left; border: 1px dotted black;">

 
          <span><img src ="activedriver_images/<?php echo $row["image"]?>" height = '100px' width= '100px'></span> <br><br>
          <p class="align">  <?php echo $i++?> <br></p>  
           <span>Full Name:</span> <?php echo $row["fullname"]?> <br>
           <span></span>Age: </span> <?php echo $row["age"]?><br>
           <span>Address: </span> <?php echo $row["address"]?><br>
           <span>Phone: </span> <?php echo $row["phone"]?><br>
           <br>
           <span>
             <a class="link" href="dActiveDriverUpdate.php?id=<?php echo $row['id'];?>"> Update </a>
            </span>

            <span>
             <a class="link" href="deleteActiveDriver.php?id=<?php echo $row['id'];?>"> Delete </a>
            </span>
  
        </div>
        <?php 
        }
        ?>