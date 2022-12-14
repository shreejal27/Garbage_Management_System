
<?php 
require_once 'auth_check.php';
?>



<html>
  <head>
    <title>Admin Panel</title>
   
    <link rel="stylesheet" href="admin.css" />
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
      type="text/javascript"
    ></script>
  </head>
  <body onload= "dashboard()">
    <section id="left">
      <ul>
        <li id="Dash" onclick="dashboard()">Dashboard</li>
        <li id="showVan" onclick="showVan()">Garbage Van Tracker</li>
        <li id="showDustbin" onclick="showDustbin()">Dustins</li>
        <li id="scrap" onclick="scrap()">Scrap</li>
        <li id="complain" onclick="complain()">View Complains</li>
        <!-- <li id="scrap" onclick="scrap()">Collect Scrap</li> -->
        <li id="driver" onclick="driver()">Drivers Requests</li>
        <li id="activeDriver" onclick="activeDriver()">Active Drivers</li>
        <li id="logout" onclick="logout()">Logout</li>
      </ul>
    </section>
    <section id="right"></section>
    <script src="adminscripts.js"></script>
  </body>
</html>
