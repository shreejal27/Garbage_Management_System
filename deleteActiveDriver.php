<?php
require_once "1)config.php";

$driver_id = $_GET["id"];


$query1= mysqli_query($connection, "SELECT * from activedriver WHERE id = {$driver_id}");

$row1 = mysqli_fetch_array($query1);

$imagepath = "activedriver_images/" ;
$image = $row1["image"];

unlink($imagepath. $image);

$query = "DELETE FROM activedriver WHERE id = {$driver_id}";

$result = mysqli_query($connection, $query) or die("Query Unsuccessful");


echo '<script> 
alert ("Your Record Has Been Deleted.")
window.location.replace("admin.php");
</script>';


mysqli_close($connection);

?>