<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<section class="bloques" style="background-color: #F5F4F4;">
    <div class="container">
        
		<div class="row">
		<br>
		<br>

		<img src="REGISTRO.JPG" class="rounded" alt="" width="600" height="130" align="center"> 
		<br>
		<br>
		<br>
		<br>
        <div class="col-lg-4">
         <img src="1.jpeg" class="rounded" alt="" width="700" height="400" align="left"> 
        </div>
         
		<div class="col-lg-4">
		
		<div class="container">
	<div class="starter-template">
	
		<div class="row">
		
			<div class="col-md-5 col-md-offset-2">
			
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="registroCode.php" method="POST" role="form">
							<legend>Registro de usuarios</legend>
							<div class="form-group">
								<label for="nombre">Nombre </label>
								<input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Ingresa tu nombre">
							</div>
							
							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" name="txtEmail" class="form-control" id="email"  required placeholder="Ingresa tu dirección de e-mail">
							</div>

							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
							</div>

							<button type="submit" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
        </div>
		</div>

        
      </div>
    </div>
  </section>



<?php include 'partials/footer.php';?>