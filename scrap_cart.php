<?php
session_start();
$session=$_SESSION['arr'];

$id= $_COOKIE['scrapname'];
$name= $_COOKIE['scrapid'];
$quantity= $_COOKIE['squantity'];

// echo $id;
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $quantity;


foreach($session as $val)
{
  echo $val.'<br>';
}
?>