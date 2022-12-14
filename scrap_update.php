
<?php require_once "1)config.php"; 

$id= $_GET['id'];
$query = "SELECT * FROM scrap WHERE id= '$id' ";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);
?>
<link rel="stylesheet" href="complain.css" />
<style>
       button{
              transition-duration: 0.5s;
              background-color: lightgreen;
              color: black;
              border: none;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              border-radius: 25px;
            }
            button:hover{
              background-color: green;
              color: white;
            }
            a{
                text-decoration: none;
                color: black;
            }
</style>
<div class= "main">

    <form action="scrap_update_processing.php" method="POST" enctype="multipart/form-data">
        <!-- <label>ID</label> -->
        <input value="<?php echo $id?>" type="number" name="id" hidden/> <br>
        <img src ="scrap/<?php echo $row["simage"]?>" height = '100px' width= '100px'> <br>
        <input type="file" name="simage" value="<?php echo $row['simage']?> "/> <br />
        <label>Scrap Name:</label><br />
        <input value="<?php echo $row['sname'] ?>" type="text" name="sname" 
              <br />
        <label>Price: </label><br />
        <input value="<?php echo $row['sprice'] ?>" type="number"name="sprice" 
              <br />
        
        <br>
        <input type="submit" name= "update" value= "update">

        <button> <a href="">Back</a></button>
    </form>
</div>
    
