<html>
    <head>
        <title></title>
        <meta http-equiv="refresh" content="3; url='login.html'" />
    </head>
    <h2>You are being logged out
    </h2>
</html>
<?php 
session_start();
session_unset();
session_destroy();
// header("location:index.php");
?>