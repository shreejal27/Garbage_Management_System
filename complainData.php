<?php
$fname= $_POST["firstName"];
$lname= $_POST["lastName"];
$locality= $_POST["locality"];
$subject= $_POST["subject"];
$message= $_POST["message"];


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "complain_images/". $filename;

move_uploaded_file($tempname, $folder);


$host= "localhost";
$user= "root";
$password="";                                                                                                                                           
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database); 

$query ="insert into complain(firstname, lastname, locality, subject, message, image )
        values('$fname', '$lname', '$locality', '$subject', '$message', '$folder')";

mysqli_query($connection, $query);

echo '<script> 
        alert ("Your Complain Have Been Successfully Recorded! ")
        window.location.replace("index.php");
        </script>';
?>