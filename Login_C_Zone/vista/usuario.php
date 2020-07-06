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

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });

          //San Sebastian
         // Marcador 1 
         var marker = new google.maps.Marker({
           position: { lat: -4.010767912, lng: -79.18994582 }, // coodernadas del marcador 1
           icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
           });
           marker.setMap(map);
           
           // Marcador 2
           var marker2 = new google.maps.Marker({
             position: { lat: -4.00749648, lng: -79.19509295 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker2.setMap(map);
             
             //Marcador 3
             var marker3 = new google.maps.Marker({
             position: { lat: -4.003567203, lng: -79.19501404 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker3.setMap(map);
              //Marcador 4
              var marker4 = new google.maps.Marker({
             position: { lat: -4.003541811, lng: -79.19870876 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker4.setMap(map);
             //Marcador 5
             var marker5 = new google.maps.Marker({
             position: { lat: -4.000136993, lng: -79.19900182 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker5.setMap(map);
             //Marcador 6
             var marker6 = new google.maps.Marker({
             position: { lat: -4.000542659, lng: -79.20485037 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker6.setMap(map);
             //Marcador 7
             var marker7 = new google.maps.Marker({
             position: { lat: -4.018021133, lng: -79.2027895 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker7.setMap(map);
             //Marcador 8
             var marker8 = new google.maps.Marker({
             position: { lat: -4.02383058, lng: -79.2009713 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker8.setMap(map);
             //Marcador 9
             var marker9 = new google.maps.Marker({
             position: { lat: -4.034395256, lng: -79.20005889 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker9.setMap(map);
             //Marcador 10
             var marker10 = new google.maps.Marker({
             position: { lat: -4.040727208, lng: -79.20095422 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker10.setMap(map);
             //Marcador 11
             var marker11 = new google.maps.Marker({
             position: { lat: -4.042999031, lng: -79.19766632 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker11.setMap(map);
             //Marcador 12
             var marker12 = new google.maps.Marker({
             position: { lat: -4.052667428, lng: -79.19656968 }, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker12.setMap(map);
              //Marcador 13
              var marker13 = new google.maps.Marker({
             position: { lat: -4.053894396, lng: -79.19430823}, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker13.setMap(map);
             //Marcador 14
             var marker14 = new google.maps.Marker({
             position: { lat: -4.02719436, lng: -79.19689365}, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker14.setMap(map);
             //Marcador 15
             var marker15 = new google.maps.Marker({
             position: { lat: -4.010565883, lng: -79.19348329}, // coordenadas del marcador 2
             icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             });
             marker15.setMap(map);

      }
      

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
          	resultsMap.setZoom(18);
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
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
