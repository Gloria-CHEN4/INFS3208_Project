<style>

  #main-part{
    margin-top: 10px;
  }
  
  #main-part h3{
    color: green;
    text-align: center;
  }
  
  #forms-part{
    float: left;
    background-color: #f1f1f1;
    width: 20%;
    height: 430px;
    border: 2px solid green;
    text-align: center;
  }
  
  #forms{
    border-bottom: 2px solid green;
    padding-bottom: 5px;
  }
  
  #map{
    float: left;
    padding: 5px;
    width: 79%;
    height: 430px;
    background-color: #f1f1f1;
    border: 2px solid green;
    margin-left: 1%;
  }
  
  
  }
</style>
<head>
<script src=<?php echo base_url('js/jquery-3.5.0.min.js');?>></script> 
<script src=<?php echo base_url('js/script.js');?>></script> 
</head>

<body>
    <div id="forms-part">

      <div id="forms">
        <h3>Search for an event</h3>
        <form action="Post_event/search" method="get" id="login_form">
        <input id="auto" type="search" name= "keyword" placeholder="Search" aria-label="Search">
        <div id="response"></div>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

      <div id="forms">
        <h3>Upload a file here! </h3>
        <button type="submit" name="Go" id="Go"><a href=<?php echo site_url('Upload');?>>Go</a></button>
        <h3>Manipulating an uploaded image here! </h3>
        <button type="submit" name="Go" id="Go"><a href=<?php echo site_url('Manipulation_controller');?>>Go</a></button>
        
      </div>

      <div id="Invitation-part">
        <h3>Create a new event here!</h3>
        <button type="submit" name="Go" id="Go"><a href=<?php echo site_url('Post_event');?>>Here!</a></button>
      </div>

    </div>

    <div id="map">
        <h3>Choose a location you are interested in!</h3>
        <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>AIzaSyDKJy3IkSK6b3BtvBp06qbM9Up5Vqk0hxg
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKJy3IkSK6b3BtvBp06qbM9Up5Vqk0hxg&callback=initMap">
    </script>
    </div>
    
</body>

