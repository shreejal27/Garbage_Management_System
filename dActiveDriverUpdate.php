
<?php require_once "1)config.php"; 

$id= $_GET['id'];
$query = "SELECT * FROM activedriver WHERE id= '$id' ";
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

    <form action="dActiveDriverUpdateProcess.php" method="POST" enctype="multipart/form-data">
        <!-- <label>ID</label> -->
        <input value="<?php echo $id?>" type="number" name="id" hidden/> <br>
        <img src ="activedriver_images/<?php echo $row["image"]?>" height = '100px' width= '100px'> <br>
        <input type="file" name="driverimage" value="<?php echo $row['image']?> "/> <br />
        <label>Full name</label><br />
        <input value="<?php echo $row['fullname'] ?>" type="text" name="fullname" pattern="[A-Za-z]+\s[A-Za-z]+"
                title="Enter Your Full Name With Spaces"/><br />
        <label>Age</label><br />
        <input value="<?php echo $row['age'] ?>" type="number"name="age" pattern="^(?:1[8-9]|[2-5][0-9])"
                title="Your Age Should Be Between 18 and 59 years old"/><br />
        <label>Current Residence</label><br />
        <input value="<?php echo $row['address'] ?>" type="text"name="address"    pattern="[A-Za-z]+"
                title="Enter Your Address Without Numbers"/><br />
        <label> Phone</label> <br />
        <input value="<?php echo $row['phone'] ?>" type="number" name="phone"  pattern="(98)?[0-9]{8}"
                title="Phone Number Must Be Of 10 Digits"/><br />
        <br>
        <input type="submit" name= "update" value= "update">
        <button> <a href="">Back</a></button>
    </form>
</div>
    
