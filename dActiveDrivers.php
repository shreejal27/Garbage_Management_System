<?php require_once "1)config.php"; ?>

<?php

$driver_id = $_GET["id"];

$imagepath = "driver_images/" ;


$query1 = "Insert Into activedriver(fullname, age, address, phone, image) select fullname,age,address,phone,image FROM driver WHERE id = {$driver_id}";

$query2= "SELECT * from driver WHERE id = {$driver_id}";


$query3 = "Delete From driver where id= {$driver_id}";   
 
  $run1= mysqli_query($connection, $query1); 
  $run2= mysqli_query($connection, $query2); 
 
  $row1 = mysqli_fetch_array($run2);

  $source='C:/xamppp/htdocs/garbage/driver_images/'.$row1["image"];
  $destination = 'C:/xamppp/htdocs/garbage/activedriver_images/'. $row1["image"];

  copy($source, $destination);

  $image = $row1["image"];
  unlink($imagepath. $image);
  
  $run3= mysqli_query($connection, $query3); 

    if($run1 &&$run2 && $run3 == TRUE){
      echo '<script> 
      alert ("Your Record Have Been Moved To Active Driver")
      window.location.replace("admin.php");
      </script>';
      // echo  "Record has been moved to Active Driver";
      // header("Location: http://localhost/garbage/admin.php"); 
    }
    else{
      echo '<script> 
      alert ("Your Record Has Not Been Transferred. Please Try Again")
      window.location.replace("admin.php");
      </script>';
      // echo "Record has not been added. Please try again";
      // header("Location: http://localhost/garbage/admin.php");
      
    }

