<?php
$sname= $_POST["sname"];
$sprice= $_POST["sprice"];


$filename = $_FILES["simage"]["name"];
$tempname = $_FILES["simage"]["tmp_name"];
$folder = "scrap/". $filename;

move_uploaded_file($tempname, $folder);


$host= "localhost";
$user= "root";
$password="";                                                                                  
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database); 

$query ="insert into scrap(sname, sprice, simage)
        values('$sname', '$sprice', '$filename')";

mysqli_query($connection, $query);

echo '<script> 
        alert ("Your Data Has Been Successfully Added In The Database! ")
         window.location.replace("admin.php");
        </script>';
?>