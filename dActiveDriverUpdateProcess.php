<?php require_once "1)config.php"; 

if(isset($_POST['update'])){
$id = $_POST["id"];
$fullname= $_POST["fullname"];
$age= $_POST["age"];
$address= $_POST["address"];
$phone= $_POST["phone"];

$filename = $_FILES["driverimage"]["name"];
$tempname = $_FILES["driverimage"]["tmp_name"];
$folder = "activedriver_images/". $filename;

move_uploaded_file($tempname, $folder);
}

$query1= mysqli_query($connection, "SELECT * from activedriver WHERE id = $id");
$row1 = mysqli_fetch_array($query1);
$imagepath = "activedriver_images/" ;
$image = $row1["image"];




$query ="Update activedriver SET fullname='$fullname', age ='$age', address='$address', phone='$phone', image='$filename' where id = '$id'";
$record = mysqli_query($connection, $query);

if($record){
    unlink($imagepath. $image);
    echo '<script> 
    alert ("Record Have Been Successfully Updated")
    window.location.replace("admin.php");
    </script>';
 } 
 else{
    echo '<script> 
    alert ("Record Is Not Updated ! Please Try Again")
    window.location.replace("admin.php");
    </script>';
 }
 ?>
