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