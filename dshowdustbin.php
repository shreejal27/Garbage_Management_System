<html>
    <head>
        <title></title>
    </head>
    <body>
        <table border = 1>
            <tr>
                <td>maps</td>
            </tr>
            <?php
            require '1)config.php';
            $rows = mysqli_query($connection, "SELECT * FROM dustbin");
            $i=1;
            
            foreach($rows as $row):

            ?>
                <tr>
                    <td> <?php echo $i++; ?></td>
                    <td style= "width: 450px; height: 450px;"> <iframe src="https://www.google.com/maps?q=<?php echo $row ['latitude'];?>, <?php echo $row["longitude"];?>&h1=es;z=14&output=embed" width="450px" height="450px"></iframe> </td>
                </tr>

                <?php endforeach; ?>
        </table>
    </body>
</html>