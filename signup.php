
<?php require_once "1)config.php"; ?>

<?php
$username= $_POST["username"];
$password= $_POST["password"];

$query ="insert into login(username, password)
        values('$username', '$password')";


mysqli_query($connection, $query);
echo '<script> 
alert ("Your Sign Up Was Successful")
window.location.replace("login.html");
</script>';

?>