<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row" >
		<img src="FED.PNG" class="rounded" alt="" width="200" height="50" align="rigth"> 
		<br>
        <img src="img1.jpg" class="rounded" alt="" width="600" height="500" align="left"> 
		
            <div class=" col-md-offset-7">
				<div class="panel panel-default">
					<div class="panel-body">
						<form id="loginForm" action="validarCode.php" method="POST" role="form">
							<legend>Iniciar sesión</legend>

							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
							</div>

							<div class="form-group">
								<label for="password">Contraseña</label>
								<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
							</div>

							<button type="submit" class="btn btn-success">Ingresar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>