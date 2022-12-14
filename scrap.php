<html>
    <head>
    </head>
    <body>
        <form action="scrap_processing.php" method="POST" enctype="multipart/form-data">
            <label> Scrap Name: </label>
            <input type="text" name="sname"> 
            <br>
            <label> Price: </label>
            <input type="number" name="sprice">
            <br>
            <label> Scrap Image </label>
            <input type="file" name="simage">
            <br>
            <input type="submit" value= "Submit">
        </form>
    </body>
</html>