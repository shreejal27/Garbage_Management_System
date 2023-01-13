<?php
require_once "1)config.php";

$sid = $_GET["id"];


$query1= mysqli_query($connection, "SELECT * from scrap WHERE id = {$sid}");

$row1 = mysqli_fetch_array($query1);

$imagepath = "scrap/" ;
$image = $row1["simage"];

unlink($imagepath. $image);

$query = "DELETE FROM scrap WHERE id = {$sid}";

$result = mysqli_query($connection, $query) or die("Query Unsuccessful");


echo '<script> 
alert ("Your Record Has Been Deleted.")
window.location.replace("admin.php");
</script>';


mysqli_close($connection);

?>