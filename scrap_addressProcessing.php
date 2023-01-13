<?php

$fname= $_POST["firstName"];
$lname= $_POST["lastName"];
$phone= $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$payment = $_POST["pay"];

$cookie = $_COOKIE['cart'];

// Decode the cookie value into an object
if($cookie != ""){
  $cookies = $_COOKIE['cart'];
  $array = json_decode($cookies, true);

//   foreach ($array as $sid => $quantity) {
//             $id= $sid;
//             $qty = $quantity;
//             $items = array($sid, $quantity);

//   }
}
$items = $array;


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