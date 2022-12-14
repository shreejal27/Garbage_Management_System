<?php
$host= "localhost";
$user= "root";
$password= "";
$database= "garbage";

$connection= mysqli_connect($host, $user, $password, $database);

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
    <center><h1> All Complains </h1> </center> 
    <br><br></br>
<table class="center" >
 
    <tr>
        <th>SN</th>     <th>First Name</th>     <th>Last Name</th>     <th>locality</th>     <th>subject</th>     <th>message</th>     <th>file</th>
</tr>

<?php
// print_r($_COOKIE);
//     $arrange = $_GET["order"];
//     if($arrange == "id"){
    //     }
    //     else if($arrange == "id_desc"){
        //         $query= "Select * from complain ORDER BY id DESC";
        //      }
        //      else if($arrange == "name"){
            //         $query= "Select * from complain ORDER BY name ";
            //      }
            //      else if($arrange == "name_desc"){
                //         $query= "Select * from complain ORDER BY name DESC";
                //      }
                
    $query= "Select * from complain";

    $result= mysqli_query($connection, $query);



    while($row= mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td> 
            <td><?php echo $row["firstname"]?></td> 
            <td><?php echo $row["lastname"]?></td> 
            <td><?php echo $row["locality"]?></td> 
            <td><?php echo $row["subject"]?></td> 
            <td><?php echo $row["message"]?></td> 
            <td><img src = <?php echo $row["image"]?> height = '100px' width= '100px'></td>

            </tr>
    <?php 
        }
        ?>
        </table>
     