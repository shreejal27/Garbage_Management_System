<?php
    session_start();
    if (!isset($_SESSION['username'])){
        echo '<script> 
        alert ("Please login with your respective credentials")
        window.location.replace("login.html");
        </script>';
        
        // header("Location: login.html"); 
    }
 ?>   


<!-- require_once 'auth_check.php';;; to use this page on other pages. -->