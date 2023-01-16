
<?php 

require_once 'auth_check.php';

require_once "1)config.php";

include_once "header.php";
?>
<?php

$query= "Select * from scrap LIMIT 5";

$result= mysqli_query($connection, $query);

?>


 <link rel="stylesheet" href="scrap_display.css" />

 <link rel="stylesheet" href="headerfooter.css" />


<div id="toprow">

  <form action="scrap_searchresult.php" method="POST">
    <input type="text" name="result" placeholder="Search anything"  >
    
    <button type="submit"> <img src="icons/search.png" id="image" > </button>
  </form>
  
  
  
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Category</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="#plastic">Plastic</a>
      <a href="#paper">Paper</a>
      <a href="#ewaste">Ewaste</a>
      <a href="#glass">Glass</a>
    </div>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<br><br>

<div class= "row" >

  <h2 style="font-size: 32px;"> Most Sold</h2>
  
  <?php
    while($row= mysqli_fetch_assoc($result)){
      ?>
           <a class="link" href="scrap_details.php?id=<?php echo $row['id'];?>">
            
     
       
        <div class="box">

          <div class="image">
            
            <span><img src ="scrap/<?php echo $row["simage"]?>" height = '240px' width= '220px'></span> <br><br>
          </div>
    
         <div class="details">

           <span class="title"> 
             <?php echo $row["sname"]?> <br> 
             
           </span>
           <span class="price">
             Rs.<?php 
             echo $row["sprice"];
             $category= $row["category"];
             if ($category == "glass"){
              echo "/pc";
            }
            else{
              echo "/kg";
            }
             ?><br>
            </span>
          </div>
          <br>
          <br>
          
        </div>
      </a>
      <?php 
        }
        ?>

</div>


<h1 id="title"> Categories</h1>

<div class= "row" id="plastic">

  <h2> Plastic </h2>
  
  <?php
$query1= "Select * from scrap where category = 'plastic' ";

$result1= mysqli_query($connection, $query1);
while($row1= mysqli_fetch_assoc($result1)){
?>
   <a class="link" href="scrap_details.php?id=<?php echo $row1['id'];?>">

   
   
   <div class="box">
     
     <div class="image">

    <span><img src ="scrap/<?php echo $row1["simage"]?>" height = '240px' width= '220px'></span> <br><br>
  </div>

 <div class="details">

   <span class="title"> 
     <?php echo $row1["sname"]?> <br> 

   </span>
   <span class="price">
      Rs.
     <?php 
      echo $row1["sprice"];
      echo "/kg";
      ?> <br>
   </span>
  </div>
 <br>
 <br>
 
</div>
</a>
<?php 
}
?>
</div>

<div class= "row" id="paper">
<h2> Paper</h2>

<?php
$query1= "Select * from scrap where category = 'paper' ";

$result1= mysqli_query($connection, $query1);
while($row1= mysqli_fetch_assoc($result1)){
?>
   <a class="link" href="scrap_details.php?id=<?php echo $row1['id'];?>">


  
<div class="box">
  
  <div class="image">

    <span><img src ="scrap/<?php echo $row1["simage"]?>" height = '240px' width= '220px'></span> <br><br>
  </div>

 <div class="details">

   <span class="title"> 
     <?php echo $row1["sname"]?> <br> 

   </span>
   <span class="price">
   Rs.
     <?php echo $row1["sprice"];
     echo "/kg";?><br>
   </span>
  </div>
 <br>
   <br>

</div>
</a>
<?php 
}
?>
</div>

<div class= "row" id="ewaste">
<h2> Ewaste</h2>

<?php
$query1= "Select * from scrap where category = 'ewaste' ";

$result1= mysqli_query($connection, $query1);
while($row1= mysqli_fetch_assoc($result1)){
?>
   <a class="link" href="scrap_details.php?id=<?php echo $row1['id'];?>">


  
<div class="box">
  
  <div class="image">

    <span><img src ="scrap/<?php echo $row1["simage"]?>" height = '240px' width= '220px'></span> <br><br>
  </div>

 <div class="details">

   <span class="title"> 
     <?php echo $row1["sname"]?> <br> 

   </span>
   <span class="price">
   Rs.
     <?php echo $row1["sprice"];
     echo "/kg";?><br>
   </span>
  </div>
 <br>
   <br>

</div>
</a>
<?php 
}
?>
</div>

<div class= "row" id="glass">
<h2> Glass</h2>

<?php
$query1= "Select * from scrap where category = 'glass'";

$result1= mysqli_query($connection, $query1);
while($row1= mysqli_fetch_assoc($result1)){
?>
   <a class="link" href="scrap_details.php?id=<?php echo $row1['id'];?>">


  
<div class="box">
  
  <div class="image">

    <span><img src ="scrap/<?php echo $row1["simage"]?>" height = '240px' width= '220px'></span> <br><br>
  </div>

 <div class="details">

   <span class="title"> 
     <?php echo $row1["sname"]?> <br> 

   </span>
   Rs.
   <span class="price">

     <?php echo $row1["sprice"];
        echo "/pc"?><br>
   </span>
  </div>
 <br>
   <br>

</div>
</a>
<?php 
}
?>
</div>
<br><br><br>
<center> <h1>Have any queries or prefer speaking over the phone? </h1></center>
<br><br>
<div>
        <center> 
        <div style="float: left; width:50%"> 
      <h3> GENERAL INQUERIES</h3>   <br><br>
      +977 984152630 <br>
      Garbage@management.com</div>
        <div style="width: 50%; float: left;">
        <h3>BOOK A PICK UP </h3> <br><br>
        +977 984152630 
      </div>
      </center>
    </div>
    <br> <br><br> <br> <br><br>
  
    
    
<?php
  include_once "footer.php";
?>

