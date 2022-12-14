<?php require_once "1)config.php"; 
    session_start();
    ?>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

$query= "select * from login where username = '$username' and password= '$password'";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

if ($username != $row['username'] || $password != $row['password']){
    
    echo '<script> 
        alert ("Your Sign Up Was Unsuccessful Try Again");
        window.location.replace("login.html");
</script>';
//    header("location:login.html");
}
else{
    if($row["usertype"] == "admin"){
        $_SESSION['username']= $row['username'];
        header("location:admin.php");
    }
    else if ($row["usertype"]== "people"){
        
        $_SESSION['username']= $row['username'];
        header("location:index.php");
    }
    else{
        echo "you are driver";
    }
}

?>

