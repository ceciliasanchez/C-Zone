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
        var mapProp = {
          center: {lat: -4.015357, lng: -79.201764},
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Agregando el mapa al tag de id googleMap
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
       
      
        // Definiendo las coordenadas para el path del polígono
        var sansebastian = [
          { lat: -4.010767912, lng: -79.18994582 }, // 1
          { lat: -4.00749648, lng: -79.19509295 },// 2
          { lat: -4.003567203, lng: -79.19501404 },//3
          { lat: -4.000136993, lng: -79.19900182 }, //4
          { lat: -4.000136993, lng: -79.19900182 },//5
          { lat: -4.000542659, lng: -79.20485037 },//6
          { lat: -4.018021133, lng: -79.2027895 },//7
          { lat: -4.02383058, lng: -79.2009713 },//8
          { lat: -4.034395256, lng: -79.20005889 },//9
          { lat: -4.040727208, lng: -79.20095422 },//10
          { lat: -4.042999031, lng: -79.19766632 },//11
          { lat: -4.052667428, lng: -79.19656968 },//12
          { lat: -4.053894396, lng: -79.19430823},//13
          { lat: -4.02719436, lng: -79.19689365},//14
          { lat: -4.010565883, lng: -79.19348329} //15

        ];
        var elvalle= [
          {lat:-3.988773649,	lng:-79.20357263},//1
          {lat:-3.991404915,lng:-79.20163807},
          {lat:-3.990945734	,lng:-79.19994667},
          {lat:-3.992415751, lng:-79.19891386},
          {lat:-3.992262832, lng:-79.19652479},
          {lat:-3.989500918, lng:-79.19800423},
          {lat:-3.990667779	,lng:-79.19136701},
          {lat:-3.991272114	,lng:-79.18835278},
          {lat:-3.990498145	,lng:-79.1862942},
          {lat:-3.989738872	,lng:-79.18977724},
          {lat:-3.985685131	,lng:-79.19184818},
          {lat:-3.976494792	,lng:-79.19183871},
          {lat:-3.969596853	,lng:-79.19449786},
          {lat:-3.961893441	,lng:-79.20008309},
          {lat:	-3.955596019,lng:-79.2066979},
          {lat:-3.940763884	,lng: -79.21485173},
          {lat:-3.934934398	,lng:-79.21512156},
          {lat:-3.934741888	,lng:-79.22356473},
          {lat:-3.935398767	,lng:-79.22412795},
          {lat:-3.939674624	,lng:-79.22260539},
          {lat:-3.944379774	,lng:-79.21925397},
          {lat:-3.948738838	,lng:-79.22031684},
          {lat:-3.953133038, lng:-79.21959393	},
          {lat:-3.956173621	,lng:-79.21617044},
          {lat:-3.959084791	,lng:-79.21593038},
          {lat:-3.961334057	,lng:-79.21452349},
          {lat:-3.963167885	,lng:-79.21214724},
          {lat:-3.964403338	,lng:-79.21021886},
          {lat:-3.969014232	,lng:-79.20732744},
          {lat:-3.976558635	,lng: -79.20223423},
          {lat:-3.978991225	,lng:-79.20326548},
          {lat:-3.984316892	,lng:-79.20245339}
        ];
      
        // Construyendo el póligono
        var poligono = new google.maps.Polygon({
          paths: sansebastian,
          strokeColor: 'black',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#D28E0F',
          fillOpacity: 0.35
        });
        var poligono2 = new google.maps.Polygon({
          paths: elvalle,
          strokeColor: 'black',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#94DF8C',
          fillOpacity: 0.35
        });
        //Informacion Parroquia
      var popup = new google.maps.InfoWindow();

        poligono.addListener('click', function (e) {
        popup.setContent('Parroquia San Sebastian');
        popup.setPosition(e.latLng);
        popup.open(map);
      });
      var popup2 = new google.maps.InfoWindow();

        poligono2.addListener('click', function (e) {
        popup2.setContent('Parroquia El Valle');
        popup2.setPosition(e.latLng);
        popup2.open(map);
      });
        poligono2.setMap(map);
        poligono.setMap(map);
        
              
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });

          
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
      
      }
      
     
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3fZF5EYi9_AKf7I5pxcmqeDCZVlLFKL8&callback=initMap">
    
    </script>
  </body>
</html>
