<?php require_once "1)config.php"; ?>
<?php
$driver_id = $_GET["id"];

$query1= mysqli_query($connection, "SELECT * from driver WHERE id = {$driver_id}");

$row1 = mysqli_fetch_array($query1);

$imagepath = "driver_images/" ;

$image = $row1["image"];

unlink($imagepath. $image);

$query = "DELETE FROM driver WHERE id = {$driver_id}";

$result = mysqli_query($connection, $query) or die("Query Unsuccessful");
echo '<script> 
alert (" Driver Record Has Been Deleted")
window.location.replace("admin.php");
</script>';


mysqli_close($connection);

?>