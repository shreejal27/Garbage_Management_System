<?php
$fullname= $_POST["fullname"];
$age= $_POST["age"];
$address= $_POST["address"];
$phone= $_POST["phone"];
$message= $_POST["message"];


$filename = $_FILES["driverimage"]["name"];
$tempname = $_FILES["driverimage"]["tmp_name"];
$folder = "driver_images/". $filename;



move_uploaded_file($tempname, $folder);

$host= "localhost";
$user= "root";
$password= "";                                                                                                                                           
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database); 

$query ="insert into driver(fullname, age, address,phone, message, image)
        values('$fullname', '$age', '$address', '$phone', '$message', '$filename')";

mysqli_query($connection, $query);
echo '<script> 
        alert ("Your record for the becoming a garbage van driver is recorded! please wait for the response.")
        window.location.replace("index.php");
        </script>';

?>