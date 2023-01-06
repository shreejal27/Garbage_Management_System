<?php
session_start();

// $session=$_SESSION['arr'];

$id= $_SESSION['sname'];
$name= $_SESSION['sid'];
$quantity= $_SESSION['squantity'];

// echo $id;
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $quantity;


foreach($id as $val1)
{
  echo $val1.'<br>';
}
foreach($name as $val2)
{
  echo $val2.'<br>';
}
foreach($quantity as $val3)
{
  echo $val3.'<br>';
}
?>