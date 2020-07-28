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
							<legend>Registro de Paciente</legend>
							<div class="form-group">
								<label for="ubicacion">Ubicacion </label>
								<input type="text" name="txtUbicacion" class="form-control" id="Ubicacion" autofocus required placeholder="Ingresa tu Ubicacion">
							</div>
							
							<div class="form-group">
								<label for="sintomas">Sintomas</label>
								<input type="text" name="txtSintomas" class="form-control" id="Sintomas"  required placeholder="Ingresa tus Sintomas">
							</div>

							<button type="submit" class="btn btn-success">Registrar</button>
							<button type="reset" class="btn btn-success">Limpiar</button>
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