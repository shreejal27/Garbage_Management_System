<?php require_once "1)config.php"; 

$id= $_GET['id'];

$query = "SELECT * FROM scrap WHERE id= '$id' ";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);
 $scrapname = $row["sname"];

?>
<style>
  body{
 
    background-color: lightgreen;
  }
    .mainbox{
        height:500px;
        width: 1000px;
        margin-left: 15%;
        margin-top: 5%;
       background-color: cornsilk;
    }
    .image{
        padding:10%;
        float: left;
 
    }
    .details{
      
        padding-top: 10%;
     
        
    }
    button{
        border:none;
    }
    #sell,#add{
        width: 160px;
        height: 40px;
        color: white;
    }
    #sell{
        background-color: darkgreen;
    }
    #sell:hover{
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
  box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
    }
    #add{
        background-color: lightgreen;
    }
    #add:hover{
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
  box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
    }
</style>

<div class= "mainbox">
      <div class="image">

         <img src ="scrap/<?php echo $row["simage"]?>" height = '300px' width= '300px'>
      </div>

      <div class="details"> 
      <span style="font-size: 50px;"> 

          <?php echo $row["sname"]?> <br> <br>
      </span>
      <span style="font-size: 30px;">
          
          Rs: <?php echo $row["sprice"]?>
      </span>
      <br> <br> <br>
       <span style="font-size: 20px;">
        Quantity 
       </span>
       <button onclick="decrease()" style="margin:15px;">-</button>
            <span id="counter"></span>
            <button onclick="increase()" style="margin:15px;">+</button>
           

        <br> <br><br>
    
      <a href="scrap_sellnow.php?id=<?php echo $row['id'];?>"> <button id="sell" >Sell Now</button></a>

 
      <button id="add" onclick="add()">Add To Cart</button> 
     </div>


</div>

<script type="text/javascript">
    var sname = "<?php echo $scrapname; ?>";
    var sid = "<?php echo $id; ?>";
      data = 1;
  document.getElementById("counter").innerText = data;

  function increase() {
      data = data + 1;
      document.cookie="quantity="+data;
      document.getElementById("counter").innerText = data;
   
  }
 
  function decrease() {
      data = data - 1;
      if (data < 1){
        data= 1;
      }
      document.cookie="quantity="+data;
      document.getElementById("counter").innerText = data;
     
  }

  function add(){
    var result = confirm("One Item " + sname + " Has Been Added To Your Cart");
    if (result == true){
        document.cookie="scrapname="+sname;
        document.cookie="scrapid="+sid;
        document.cookie="squantity="+data;
      
    }
    if(result == false){
        event.preventDefault();
    }
  }
 
</script>

