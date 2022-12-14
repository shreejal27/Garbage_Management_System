<html>
    <head>
        <title>
        </title>
        <style>
            #map {
              height: 600px;
              width: 100%;
            }
            .center{
              text-align: center;
            }
            body{
              background-color: lightgreen;
            }
          </style>
    </head>
    <body>
      <br>
            <h1 class="center"> Available Dustbins</h1>
            <br>
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