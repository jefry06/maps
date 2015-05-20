<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1PYz1bclNJycXR24-iurrejnPUl_zAxw&libraries=visualization&sensor=true_or_false">
    </script>
    <script type="text/javascript">
      function initialize() {
      	var myLatlng = new google.maps.LatLng(-6.183021, 106.827599);
        var mapOptions = {
          //center: { lat: -34.397, lng: 150.644},
          center : myLatlng,
          zoom: 17
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

      	// To add the marker to the map, use the 'map' property
      	var image = 'dki_jakarta.png';
		var marker = new google.maps.Marker({
    		position: myLatlng,
    		//map: map,
    		title:"Posisi deket2 ke Nasi Goreng Kebon Sirih!",
    		icon: image
		});
		
		var heatMapData = [
  			{location: new google.maps.LatLng(-6.182749, 106.831976), weight: 2},	
  			{location: new google.maps.LatLng(-6.183293, 106.823136), weight: 2}
  		];
  		
  		
  		  var flightPlanCoordinates = [
 			new google.maps.LatLng(-6.182749, 106.831976),
		    new google.maps.LatLng(-6.183293, 106.823136)
  		 ];
  
  		  var flightPath = new google.maps.Polyline({
    		path: flightPlanCoordinates,
    		geodesic: true,
    		strokeColor: '#00EC00',
    		strokeOpacity: 1.0,
    		strokeWeight: 2
  		});
  		
  
		var heatmap = new google.maps.visualization.HeatmapLayer({
  			data: heatMapData
		});
		
		marker.setMap(map);   
		flightPath.setMap(map); 
		heatmap.setMap(map);
		
		google.maps.event.addListener(marker, 'click', showMessage);        
      	}
		
      	google.maps.event.addDomListener(window, 'load', initialize);
      	
      	function showMessage(){
      		alert('Hidup Jakarta!');
      	}
    </script>
  </head>
  <body>
<div id="map-canvas"></div>
  </body>
</html>
