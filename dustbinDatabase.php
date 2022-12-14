<?php require_once "1)config.php"; ?>

<?php
$lat= $_POST["lat"];
$lon= $_POST["lon"];


$query ="insert into dustbin(latitude, longitude)
        values('$lat', '$lon')";

mysqli_query($connection, $query);

echo
"
<script>
alert('Data Added Successfully');
document.location.href = 'dustbinAdmin.php';
</script>
"
?>

