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
    <div id="details">Location Loading</div>
        <div id="map"></div>
        <script>
            function initMap() {
              var options = {
                zoom: 12,
                center: { lat: 27.7172, lng: 85.324 },
              };
              //new map
              var map = new google.maps.Map(document.getElementById("map"), options);
    
    
            //  addMarker({ lat: , lng:  });
           
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
<script>
  var reqcount = 0;

  navigator.geolocation.watchPosition(successCallback, errorCallback);

  function successCallback(position) {
    const { accuracy, latitude, longitude, altitude, heading, speed } =
      position.coords;
    reqcount++;
    details.innerHTML = "Accuracy: " + accuracy + "<br>";
    details.innerHTML += "Latitude: " + latitude + "<br>";
    details.innerHTML += "Longitude: " + longitude + "<br>";
    details.innerHTML += "Altitude: " + altitude + "<br>";
    details.innerHTML += "Heading: " + heading + "<br>";
    details.innerHTML += "Speed: " + speed + "<br>";
    details.innerHTML += "reqcount: " + reqcount;
  }

  function errorCallback(error) {}

  // var options = {
  //   enableHighAccuracy: false,
  //   timeout: 5000,
  //   maximumAge: 0
  // };
</script>
