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


<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


<!-- HOME -->
<section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Coronavirus COVID 19</h1>
                                             <h3>Los coronavirus son una amplia familia de virus, algunos tienen la capacidad de transmitirse de los animales a las personas. Producen cuadros clínicos que van desde el resfriado común hasta enfermedades más graves, como ocurre con el coronavirus que causó el síndrome respiratorio agudo grave (SARS-CoV) y el coronavirus causante del síndrome respiratorio de Oriente Medio (MERS-CoV).</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Prevención</h1>
                                             <h3>Evita eventos con mucha gente, y reuniones multitudinarias.
                                                  Evita contacto cercano (menos de 6 pies o 2 metros) con cualquier persona que esté enferma o que presente síntomas.
                                                  Quédate en casa cuanto sea posible y mantén distancia entre tú y otros (6 pies o 2 metros) , especialmente si estás a mayor riesgo de una enfermedad grave. Ten en cuenta que algunas personas pueden tener la COVID-19 y contagiar a otros, aunque no tengan síntomas ni sepan que tienen la COVID-19.
                                                  Lávate las manos con frecuencia con agua y jabón por lo menos por 20 segundos, o usa un desinfectante para manos con base de alcohol que contenga al menos 60% de alcohol.
                                                  Cúbrete la cara con una mascarilla de tela cuando estés en lugares públicos, como la tienda o el supermercado, donde es difícil evitar el contacto cercano con otros, especialmente si estás en un área donde continúa el contagio a nivel de la comunidad. público, los taxis y los viajes compartidos si estás enfermo.</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Semaforización de Sectores</h1>
                                             <h3>Consiste en que, debido al flujo de personas en las ciudades y ante la dificultad que representa el aislamiento general en materia económica y laboral, las zonas con mayor insidencia de casos, serán clasificados con forme esta se encuentre presente y las personas puedan tener cuidado <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3><font color="red">SEMÁFORO ROJO</h3>
                              <p>Cuando existen mas de 100 contagios, notificamos la gravedad de semáforo en Rojo</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3><font color="yellow">SEMÁFORO AMARILLO</h3>
                              <p>Cuando existen entre 10 y 100 casos, se notifica la gravedad en semáforo en Amarillo</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3><font color="green">SEMÁFORO VERDE</h3>
                              <p>Cuando existen menos de 10 casos, se notifica con semáforo en Verde</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Proyecto - Metodologías ágiles</h2>
                              </div>
                              <address>
                                   <p>Creado mediante proceso de Scrum,<br> Julio del 2020</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 C-ZONE</p>
                                   
                                   <p>Scrum Master: Édison Ruiz</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+593 6048 0085, +593 97 984 1323</p>
                                   <p><a href="mailto:youremail.co">haagila@utpl.edu.ec</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>


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
          <a data-toggle="modal" href="#myModal" class="btn btn-warning ">Enviar queja o sugerencia</a>
          
					<!--Google map
					
                <div id="map-container-google-3" class="z-depth-1-half map-container-3">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2042334.8321302196!2d-78.36844492320434!3d-1.205519813206936!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1593889009972!5m2!1ses!2sec" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>-->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      



  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Enviar Queja o Sugerencia</h4>
        </div>
        <div class="modal-body">
<form class="form-horizontal" role="form" method="post" action="process.php">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre</label>
    <div class="col-lg-4">
      <input type="text" name="fullname" class="form-control" id="inputEmail1" placeholder="Nombre">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">Celular</label>
    <div class="col-lg-3">
      <input type="phone" name="phone" class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Domicilio</label>
    <div class="col-lg-9">
      <input type="text" name="address" class="form-control" id="inputPassword1" placeholder="Domicilio">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-3 col-md-offset-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="1" required>
		    Queja
		  </label>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="2" required>
		    Sugerencia
		  </label>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="3" required>
		    Agradecimiento
		  </label>
		</div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Email</label>
    <div class="col-lg-9">
      <input type="text" name="email" class="form-control" id="inputPassword1" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Mensaje</label>
    <div class="col-lg-9">
    <textarea name="msg" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
      <button type="submit" class="btn btn-default">Enviar mensaje</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script src="admin/res/bootstrap3/js/bootstrap.min.js"></script>
	
</div><!-- /.container -->


<?php include 'partials/footer.php';?>