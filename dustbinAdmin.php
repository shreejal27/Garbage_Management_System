<html>
    <head>
        <title>
        </title>
        <style>
            #map {
              height: 400px;
              width: 100%;
            }
            label{
              display: inline-block;
              width: 75px;
            }
            button, .butt{
              transition-duration: 0.5s;
              background-color: green;
              color: black;
              border: none;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
            }
            button:hover{
              background-color: #00b300;
              color: white;
            }
            .butt:hover{
              background-color: #00b300;
              color: white;
            }
          </style>
    </head>
    <body>
        <h2>Add new Location for Dustbins</h2>
        <form action="dustbinDatabase.php" method="POST"> 
        <label> Latitude: </label>
        <input type= "text" name="lat" required></input>
        <br>
        <label> Longitude: </label>
        <input type= "text" name="lon" required></input>
        <br> <br>
        <br>
        <button type="submit"> Add </button>
        <input class="butt" type = "button" value= "Show Dustbins" onClick="window.location.reload(true)">
    </form>
        <br><br><br>
        <div id="map"></div>
        <script>
            function initMap() {
              var options = {
                zoom: 12,
                center: { lat: 27.7172, lng: 85.324 },
              };
              //new map
              var map = new google.maps.Map(document.getElementById("map"), options);
      
            <?php
            require '1)config.php';
            $result = mysqli_query($connection, "SELECT * FROM dustbin");
            
              while ($row= mysqli_fetch_assoc($result)){
            ?>
             addMarker({ lat: <?php echo $row["latitude"]?>, lng: <?php echo $row["longitude"]?> });
             <?php }
             ?>
              // Add Marker function
              function addMarker(coords) {
                var marker = new google.maps.Marker({
                  position: coords,
                  map: map,
                  icon: {
                    url: "icons/dustbin.png",
                    scaledSize: new google.maps.Size(30, 30),
                  },
                });
              }
            }

          </script>
          <script
            async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcHg2P9RwnP2jZh_u-vAMD5Ev7fjPzkms&callback=initMap"
          ></script>
    </body>
</html>