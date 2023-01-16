<?php
 require_once "1)config.php"; 
?>
<style>
    table, th, td {
  border: 1px solid green;
  border-collapse: collapse;
  text-align: center;
}
table.center{
    margin-left:auto;
    margin-right:auto;
}
</style>
<!-- <select id="list" onchange ="getValue()">
    <option value= "id"> By ID</option>
    <option value= "id_desc" > By ID Descending </option>
    <option value= "name" > By name</option>
    <option value= "name_desc"> By name Descending</option>
</select> -->
    <br>
    <center><h1> All Scrap Orders </h1> </center> 
    <br><br></br>
<table class="center" >
 
    <tr>
        <th>SN</th>     <th>First Name</th>     <th>Last Name</th>     <th>Phone</th>     <th>Email</th>     <th>Address</th>     <th>Payment</th> <th>Items</th>
</tr>

<?php
             
    $query= "Select * from cart";
    $result= mysqli_query($connection, $query);

    while($row= mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td> 
            <td><?php echo $row["firstname"]?></td> 
            <td><?php echo $row["lastname"]?></td> 
            <td><?php echo $row["phone"]?></td> 
            <td><?php echo $row["email"]?></td> 
            <td><?php echo $row["address"]?></td> 
            <td><?php echo $row["payment"]?></td> 
            <td><?php echo $row["items"]?></td> 
            </tr>
    <?php 
        }
        ?>
        </table>
     