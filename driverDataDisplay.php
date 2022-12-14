<?php
$host= "localhost";
$user= "root";
$password= "";
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database);

$query= "Select * from driver";

$result= mysqli_query($connection, $query);
?>
<style>
    a{
        color: green;
        padding: 10px;
    }
    div{
        margin: 20px;
        padding: 50px;
    }
    .align{
        text-align: center;
    }
</style>
        <?php
        $i=1;
    while($row= mysqli_fetch_assoc($result)){
        // print_r($row);
        ?>
        

        <div style="color:black; float: left; border: 1px dashed black;">

 
            <span><img src ="driver_images/<?php echo $row["image"]?>" height = '100px' width= '100px'></span> <br> <br>
            <p class="align">  <?php echo $i++?> <br></p>  
           <span>Full Name:</span> <?php echo $row["fullname"]?> <br>
           <span></span>Age: </span> <?php echo $row["age"]?><br>
           <span>Address: </span> <?php echo $row["address"]?><br>
           <span>Phone: </span> <?php echo $row["phone"]?><br>
           <span>Message: </span><?php echo $row["message"]?><br>
           <br>
           <span>
               <a href="dActiveDrivers.php?id=<?php echo $row['id'];?>"> Move </a>
           </span>
            <span>
             <a href="deleteDriverRequest.php?id=<?php echo $row['id'];?>"> Delete </a>
            </span>
  
        </div>
        <?php 
        }
        ?>