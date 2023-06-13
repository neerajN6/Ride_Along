<?php
$apiKey = 'AIzaSyCU0VvVjbPsDBWfUQitLKgxHEISImM1sds';

$origin = '12.9141,74.8560'; // New York, NY
$destination = '12.7687,75.2071'; // San Francisco, CA

$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=' . urlencode($origin) . '&destinations=' . urlencode($destination) . '&key=' . urlencode($apiKey);

$json = file_get_contents($url);
$data = json_decode($json);

$distance = $data->rows[0]->elements[0]->distance->text;
$duration = $data->rows[0]->elements[0]->duration->text;

echo 'Distance: ' . $distance . '<br>';
echo 'Duration: ' . $duration;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Carpooling Map</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU0VvVjbPsDBWfUQitLKgxHEISImM1sds&callback=initMap&v=weekly" defer></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
  </head>
  <body>
    <div id="map"></div>
    <script>
		function initMap() {
    // Set the initial position of the map
    var center = {lat: 37.7749, lng: -122.4194};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: center
    });
  
    // Add markers to the map
    var marker1 = new google.maps.Marker({
      position: {lat: 12.9141, lng: 74.8560},
      map: map,
      title: 'Pick-up location'
    });
  
    var marker2 = new google.maps.Marker({
      position: {lat: 12.7687, lng: 75.2071},
      map: map,
      title: 'Drop-off location'
    });
  
    // Add a route to the map
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);
  
    var request = {
      origin: marker1.getPosition(),
      destination: marker2.getPosition(),
      travelMode: 'DRIVING'
    };
  
    directionsService.route(request, function(result, status) {
      if (status == 'OK') {
        directionsRenderer.setDirections(result);
      }
    });
  }
	</script>
  </body>
</html>