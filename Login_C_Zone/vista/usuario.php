<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    OPCIONES
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-header" href="#">NOTIFICACIONES</a>
    <a class="dropdown-header" href="#">INFORMACIÓN</a>
    <a class="dropdown-header" href="#">MÁS</a>
  </div>
</div> 

		<div class="jumbotron">
		  
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
				<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
					<!--Google map
					
                <div id="map-container-google-3" class="z-depth-1-half map-container-3">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2042334.8321302196!2d-78.36844492320434!3d-1.205519813206936!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1593889009972!5m2!1ses!2sec" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>-->
             
				</p>
			</div>
		</div>
	</div>
   
	
</div><!-- /.container -->

<?php include 'partials/footer.php';?>

<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding Service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <input id="address" type="textbox" value="Loja">
      <input id="submit" type="button" value="Geocode">
    </div>
    <div id="map"></div>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: -4.015357, lng: -79.201764}
        });
        var geocoder = new google.maps.Geocoder();
        
        //Loja


        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map) ;
        });

          
      }

      var poligono = new google.maps.LatLng();
      
      var poligono = [[
        new google.maps.LatLng(-4,010767912, -79,18994582),
        new google.maps.LatLng(-4,000542659, -79,20485037),
        new google.maps.LatLng(-4,010565883, -79,19348329)
        ],
      [
        new google.maps.LatLng(-4,010767912, -79,18994582),
        new google.maps.LatLng(-3,990945734 ,-79,19994667),
        new google.maps.LatLng(-4,011149398, -79,18286689)
      ],
      [
        new google.maps.LatLng(-3,988773649, -79,20357263),
        new google.maps.LatLng(-3,934934398, -79,21512156),
        new google.maps.LatLng(-3,984316892, -79,20245339)
      ],
      [
        new google.maps.LatLng(-3,969014232, -79,20732744),
        new google.maps.LatLng(-3,997936165,-79,21223682),
        new google.maps.LatLng(-3,970159189, -79,20840778)
      ],
      [
        new google.maps.LatLng(-4,001542399, -79,20472979),
        new google.maps.LatLng(-4,016452448, -79,22637717),
        new google.maps.LatLng(-4,018021133, -79,2027895)
      ],
      [
        new google.maps.LatLng(-3,935398767, -79,22412795),
        new google.maps.LatLng(-3,969014232, -79,20732744),
        new google.maps.LatLng(-3,935240873, -79,22903801)
      ]
      
  ];

        
        Loja = new google.maps.Polygon({
        paths: poligono,
        strokeColor: "#FF0100",
        strokeOpacity: 5,
        strokeWeight: 2,
        fillColor: "#FF0100",
        fillOpacity: 0.35
        });
        Loja.setMap(map);

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
          	resultsMap.setZoom(18);
            resultsMap.setCenter(results[0].geometry.location);
            Loja.setMap(map);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
            var poligono = new google.maps.LatLng();
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3fZF5EYi9_AKf7I5pxcmqeDCZVlLFKL8&callback=initMap">
    </script>
  </body>
</html>
