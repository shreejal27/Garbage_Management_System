<html>
    <head>
        <title>
        </title>
        <style>
            #map {
              height: 400px;
              width: 100%;
            }
          </style>
    </head>
    <body>
        <h2>Add new Location for Dustbins</h2>
        <form action="dustbinDatabase.php" method="POST"> 
        <label> Latitude </label>
        <input type= "text" name="lat"></input>
        <br>
        <label> Longitude </label>
        <input type= "text" name="lon"></input>
        <br>
        <button type="submit"> ADD </button>
        <input type = "button" value= "Show Dustbins" onClick="window.location.reload(true)">
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
      
            //   addMarker({ lat: 27.6942009, lng: 85.2985818 });
            //   addMarker({ lat: 27.69, lng: 85.2996 });
            //   addMarker({ lat: 27.701806782880478, lng: 85.28319329022261 });
            <?php
            require '1)config.php';
            $result = mysqli_query($connection, "SELECT * FROM dustbin");
            
              while ($row= mysqli_fetch_assoc($result)){
  
            ?>
             addMarker({
              coords:{ lat: <?php echo $row["latitude"]?>, lng: <?php echo $row["longitude"]?>},
              // content: '<h1> HEllo WOrld</h1>'
              
            });
    
            <?php
          }
             ?>
              // Add Marker function
              function addMarker(props) {
                var marker = new google.maps.Marker({
                  position: props.coords,
                  map: map,
                  icon: {
                    url: "icons/dustbin.png",
                    scaledSize: new google.maps.Size(30, 30),
                  },
                });

                // if(props.content){
                //   var infowindow =  new google.maps.InfoWindow({
                //    content: props.content
                //   });

                //   marker.addListener("click", function() {
                //     infowindow.open(map,marker);
                // });

            //  function addInfo(){
                 var infowindow =  new google.maps.InfoWindow({
                 content: "This is just a marker"
                });
            //  }
                marker.addListener("click", function() {
                  infowindow.open(map,marker);
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