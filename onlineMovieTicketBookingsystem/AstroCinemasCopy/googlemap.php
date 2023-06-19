<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 200px;  /* The height is 400 pixels */
        width: 200px;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of theater
  var theater = {lat: -25.344, lng: 131.036};
  // The map, centered at theater
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: theater});
  // The marker, positioned at theater
  var marker = new google.maps.Marker({position: theater, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8AI5uAzawRiVRzP10OI3mwFnMl0QA8A&callback=initMap">
    </script>
  </body>
</html>