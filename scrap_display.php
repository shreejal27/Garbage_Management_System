<?php require_once "1)config.php"; ?>
<?php

$query= "Select * from scrap LIMIT 5";

$result= mysqli_query($connection, $query);
?>


 <link rel="stylesheet" href="scrap_display.css" />

<form action="scrap_searchresult.php" method="POST">
  <input type="text" name="result" placeholder="Search anything"  >

  <button type="submit"> <img src="icons/search.png" > </button>
</form>
<div class= "row">

  <h2> Most Sold</h2>
  
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
             
             <?php echo $row["sprice"]?><br>
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


<h1> Categories</h1>

<div class= "row">

  <h2> Plastic</h2>
  
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

     <?php echo $row1["sprice"]?><br>
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

<div class= "row">
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

     <?php echo $row1["sprice"]?><br>
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

<div class= "row">
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

     <?php echo $row1["sprice"]?><br>
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

<div class= "row">
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
   <span class="price">

     <?php echo $row1["sprice"]?><br>
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