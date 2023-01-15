<?php require_once "1)config.php"; 

if(isset($_POST['update'])){
$id = $_POST["id"];
$sname= $_POST["sname"];
$sprice= $_POST["sprice"];
$category = $_POST["category"];


$filename = $_FILES["simage"]["name"];
$tempname = $_FILES["simage"]["tmp_name"];
$folder = "scrap/". $filename;

move_uploaded_file($tempname, $folder);
}

$query1= mysqli_query($connection, "SELECT * from scrap WHERE id = $id");
$row1 = mysqli_fetch_array($query1);
$imagepath = "scrap/" ;
$image = $row1["simage"];



$query ="Update scrap SET sname='$sname', sprice ='$sprice', simage='$filename', category= '$category' where id = '$id'";
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
