<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>C-Zone</title>
  <?php include 'partials/head.php'; ?>
  <?php
  if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
      header("location:admin.php");
    }
  } else {
    header("location:login.php");
  }
  ?>
  <?php include 'partials/footer.php'; ?>
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
    html,
    body {
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
      font-family: 'Roboto', 'sans-serif';
      line-height: 30px;
      padding-left: 10px;
    }
  </style>

</head>

<body>

  <div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
      <div class="Logo">
        <h2 class="text-light font-weight-bold">C-Zone</h2>
        <h5><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h5>
      </div>
      <div class="Menu">
        <a href="#" class="d-block text-light p-4"><i class="icon ion-md-pin mr-2 lead "></i>Mapa</a>
        <div class="dropdown show">
          <a href="#" class="d-block text-light  p-4" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-md-notifications mr-2 lead "></i>
            Notificaciones<span class="badge badge-pill badge-danger">4</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <button class="dropdown-item" class="btn btn-info" class="d-block text-light  p-4" id="alerta"><i class="icon ion-md-alert mr-2 lead"></i>Alerta</button>
            <button class="dropdown-item" class="btn btn-info" class="d-block text-light  p-4" id="recuerda"><i class="icon ion-md-megaphone mr-2 lead"></i>Recuerda</button>
            <button class="dropdown-item" class="btn btn-info" class="d-block text-light  p-4" id="aviso"><i class="icon ion-md-notifications mr-2 lead "></i>Aviso</button>
            <button class="dropdown-item" class="btn btn-info" class="d-block text-light  p-4" id="peligro"><i class="icon ion-md-warning mr-2 lead"></i>Peligro</button>
          </div>
        </div>
        <a href="#" class="d-block text-light  p-4"><i class="icon ion-md-mail mr-2 lead "></i>Mensajes</a>
        <a href="#" class="d-block text-light  p-4"><i class="icon ion-md-contact mr-2 lead "></i>Perfil</a>
        <a href="cerrar-sesion.php " class="d-block text-light  p-4" class="btn btn-primary btn-lg lead">Cerrar sesión</a>
      </div>
    </div>
    <div class="w-100">
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <div id="map"></div>
      <script>
        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: {
              lat: -4.015357,
              lng: -79.201764
            }
          });
          var geocoder = new google.maps.Geocoder();

          document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
          });


          //San Sebastian
          // Marcador 1 
          var marker = new google.maps.Marker({
            position: {
              lat: -4.010767912,
              lng: -79.18994582
            }, // coodernadas del marcador 1
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker.setMap(map);

          // Marcador 2
          var marker2 = new google.maps.Marker({
            position: {
              lat: -4.00749648,
              lng: -79.19509295
            }, // coordenadas del marcador 2
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker2.setMap(map);

          //Marcador 3
          var marker3 = new google.maps.Marker({
            position: {
              lat: -4.003567203,
              lng: -79.19501404
            }, // coordenadas del marcador 3
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker3.setMap(map);
          //Marcador 4
          var marker4 = new google.maps.Marker({
            position: {
              lat: -4.003541811,
              lng: -79.19870876
            }, // coordenadas del marcador 4
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker4.setMap(map);
          //Marcador 5
          var marker5 = new google.maps.Marker({
            position: {
              lat: -4.000136993,
              lng: -79.19900182
            }, // coordenadas del marcador 5
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker5.setMap(map);
          //Marcador 6
          var marker6 = new google.maps.Marker({
            position: {
              lat: -4.000542659,
              lng: -79.20485037
            }, // coordenadas del marcador 6
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker6.setMap(map);
          //Marcador 7
          var marker7 = new google.maps.Marker({
            position: {
              lat: -4.018021133,
              lng: -79.2027895
            }, // coordenadas del marcador 7
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker7.setMap(map);
          //Marcador 8
          var marker8 = new google.maps.Marker({
            position: {
              lat: -4.02383058,
              lng: -79.2009713
            }, // coordenadas del marcador 8
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker8.setMap(map);
          //Marcador 9
          var marker9 = new google.maps.Marker({
            position: {
              lat: -4.034395256,
              lng: -79.20005889
            }, // coordenadas del marcador 9
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker9.setMap(map);
          //Marcador 10
          var marker10 = new google.maps.Marker({
            position: {
              lat: -4.040727208,
              lng: -79.20095422
            }, // coordenadas del marcador 10
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker10.setMap(map);
          //Marcador 11
          var marker11 = new google.maps.Marker({
            position: {
              lat: -4.042999031,
              lng: -79.19766632
            }, // coordenadas del marcador 11
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker11.setMap(map);
          //Marcador 12
          var marker12 = new google.maps.Marker({
            position: {
              lat: -4.052667428,
              lng: -79.19656968
            }, // coordenadas del marcador 12
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker12.setMap(map);
          //Marcador 13
          var marker13 = new google.maps.Marker({
            position: {
              lat: -4.053894396,
              lng: -79.19430823
            }, // coordenadas del marcador 13
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker13.setMap(map);
          //Marcador 14
          var marker14 = new google.maps.Marker({
            position: {
              lat: -4.02719436,
              lng: -79.19689365
            }, // coordenadas del marcador 14
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker14.setMap(map);
          //Marcador 15
          var marker15 = new google.maps.Marker({
            position: {
              lat: -4.010565883,
              lng: -79.19348329
            }, // coordenadas del marcador 15
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          });
          marker15.setMap(map);
        }

        function geocodeAddress(geocoder, resultsMap) {
          var address = document.getElementById('address').value;
          geocoder.geocode({
            'address': address
          }, function(results, status) {
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
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3fZF5EYi9_AKf7I5pxcmqeDCZVlLFKL8&callback=initMap">
      </script>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <script>
    const alerta = document.querySelector('#alerta')
    alerta.addEventListener('click', () => {
      //console.log('diste click');
      toastr.error('Respeta la distancia de 1.5 m', 'Distancia Social', {
        "progressBar": true
      });

    })
    const recuerda = document.querySelector('#recuerda')
    recuerda.addEventListener('click', () => {
      //console.log('diste click');
      toastr.info('Lava tus manos constantemente, evita viajar si presentas sintomas de fiebre o tos', 'Recuerda', {
        "progressBar": true
      });

    })
    const aviso = document.querySelector('#aviso')
    aviso.addEventListener('click', () => {
      //console.log('diste click');
      toastr.success('Usa siempre tu mascarilla y lleva siempre contigo gel antibacterial o alcohol', 'Aviso', {
        "progressBar": true
      });

    })
    const peligro = document.querySelector('#peligro')
    peligro.addEventListener('click', () => {
      //console.log('diste click');
      toastr.warning('Si presentas síntomas de Covid-19, llama al centro de salud más cercano', 'Peligro', {
        "progressBar": true
      });

    })

    // toastr.info('Texto de mi Alerta');
    // toastr.error('Texto de mi Alerta');
    //toastr.warning('Texto de mi Alerta');
  </script>
</body>

</html>