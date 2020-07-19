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
    <a class="dropdown-header" href="partials/index.html">INFORMACIÓN</a>
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
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Numero de infectados'],
          ['San Sebastian',     64],
          ['El Valle',   225],
          ['El Sagrario',  5],
          ['Punzara', 122],
          ['Sucre',    340],
          ['Carigan',    70]
        ]);

        var options = {
          title: 'Numero De Infectados'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <h1>COVID 19 en la Ciudad.</h1>
  </head>
  <body>
 
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>


        </p>
        
      </div>
      <h4>Los coronavirus son una amplia familia de virus, algunos tienen la capacidad de
   transmitirse de los animales a las personas. Producen cuadros clínicos que van desde 
   el resfriado común hasta enfermedades más graves, como ocurre con el coronavirus que 
   causó el síndrome respiratorio agudo grave (SARS-CoV) y el coronavirus causante del 
   síndrome respiratorio de Oriente Medio (MERS-CoV).</h4>
   <IMG SRC="https://www.paho.org/sites/default/files/styles/flexslider_full/public/hero/2020-03/covid-19-1190x574-2-full.jpg?h=fdc0eb87&itok=CerQCpzv" ALIGN=LEFT WIDTH=400 HEIGHT=200>
   <br>
	<br>
	<br>
  <br>
		<br>
		<br>
    <br>
		<br>
		<br>
    <br>
		<br>
		<br>
   <h4>El nuevo coronavirus se llama SARS-CoV2, la enfermedad se llama Corona Virus Disease 2019=COVID19
   Es un nuevo tipo de coronavirus que puede afectar a las personas y se ha detectado por 
primera vez en diciembre de 2019 en la ciudad de Wuhan, provincia de Hubei, en China. 
Todavía hay muchas cuestiones que se desconocen en relación a la enfermedad que produce: COVID-19.</h4>
		</div>
	</div>
   
	
</div><!-- /.container -->

<?php include 'partials/footer.php';?>