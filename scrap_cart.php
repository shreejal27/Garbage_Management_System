<?php

$cookie = $_COOKIE['cart'];

// Decode the cookie value into an object
if($cookie != ""){

  $cart = json_decode($cookie);
  print_r($cart);
}
else{
  print_r("Cart is empty");
}

// Print the cart object

// $cookies = array_keys($_COOKIE);

// // Loop through the cookies array
// foreach ($cookies as $cookie) {
//   // Set the expiration time of the cookie to a past date
//   setcookie($cookie, "", time() - 3600, "/", "", true, true);
// }
?>

<!-- // $item = "shamp";
// $quantity = $cart->$item;

// echo "Quantity of $item in the cart: $quantity";
// session_start();

// // $session=$_SESSION['arr'];

// $id= $_SESSION['sname'];
// $name= $_SESSION['sid'];
// $quantity= $_SESSION['squantity']; -->



