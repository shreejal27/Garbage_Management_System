<?php require_once "1)config.php"; ?>
<?php

$query= "Select * from scrap";

$result= mysqli_query($connection, $query);
?>
<style>
  h2{
    margin:10px;
  }
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

  label{
              display: inline-block;
              width: 100px;
              margin-left: 10px;
         }
            input[type=submit], .butt{
              transition-duration: 0.5s;
              background-color: green;
              color: black;
              border: none;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin:10px;
            }
            input[type=submit]:hover{
              background-color: #00b300;
              color: white;
            }
            .butt:hover{
              background-color: #00b300;
              color: white;
            }
            .details{
                display: inline-block;
                height: 20px;
                width: 75px;
            }
         img{
          object-fit:contain;
         }

</style>

<html>
    <head>
    </head>
    <body>
    <h2>Add new Scrap Items</h2>
        <form action="scrap_processing.php" method="POST" enctype="multipart/form-data">
            <label> Scrap Name: </label>
            <input type="text" name="sname" style="width: 150px; height: 25px;" required> 
            <br>
            <label> Price: </label>
            <input type="number" name="sprice" style="width: 150px; height: 25px;" required>
            <br>
            <label> Category: </label>
            <input type="text" name="scategory" style="width: 150px; height: 25px;" required>
            <br>
            <label> Scrap Image </label>
            <input type="file" name="simage" style="width: 150px; height: 25px;" required>
            <br>
            <br>
            <input type="submit" value= "Submit" class="butt">
        </form>
    </body>
</html>
        <?php
    while($row= mysqli_fetch_assoc($result)){
        ?>
        

        <div class="box" style="color: black; float: left; border: 1px dotted black;">

 
          <span><img src ="scrap/<?php echo $row["simage"]?>" height = '150px' width= '150px'></span> <br><br>
         <br>
            <span class="details">Name::</span>  <?php echo $row["sname"]?> <br>
            <span class="details">Price::</span> <?php echo $row["sprice"]?><br>
            <span class="details">Category::</span> <?php echo $row["category"]?><br>
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