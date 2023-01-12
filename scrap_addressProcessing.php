<?php

$fname= $_POST["firstName"];
$lname= $_POST["lastName"];
$phone= $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$payment = $_POST["pay"];
$items = 1;

$host= "localhost";
$user= "root";
$password="";                                                                                  
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database); 

$query ="insert into cart(firstname, lastname, phone, email, address, payment, items)
        values('$fname', '$lname', '$phone', '$email', '$address', '$payment', '$items')";

mysqli_query($connection, $query);

echo '<script> 
        alert ("Your Data Has Been Successfully Added In The Database! ")
         window.location.replace("scrap_display.php");
        </script>';
?>