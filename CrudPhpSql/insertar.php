<!DOCTYPE html>
<html lang="en">
<head>
   	<meta charset="utf-8">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>CURSOS</title>
	 <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/owl.carousel.css" rel="stylesheet">
     <link href="css/owl.theme.default.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
</head>
<body>
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <!-- boton mobile -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Navegador</span> Menú <i class="fa fa-bars"></i>
        </button>
        <!-- /.boton mobile -->
        <a class="navbar-brand" href="#home">REGISTRO DE CURSOS</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!-- Listado de items -->
        <ul class="nav navbar-nav navbar-right">
          <li class="page-scroll">
            <a href="">UTPL</a>
          </li>
          <li class="page-scroll">
            <a href="">CURSO</a>
          </li>
        
        </ul>
      </div>
    
    </div>
  
  </nav>


	
	<?php
		include("Conexion.php");
		$clientes=new Database();

		if (isset($_POST)  && !empty($_POST)) {
			$nombres=$clientes-> limpiar($_POST['nombres']);
			$apellido=$clientes-> limpiar($_POST['apellidos']);
			$curso=$clientes-> limpiar($_POST['curso']);
			$alumnos=$clientes-> limpiar($_POST['alumnos']);
			$numero=$clientes-> limpiar($_POST['numero']);
			$res=$clientes->insertar($nombres,$apellido,$curso,$alumnos,$numero);
			if ($res) {
				echo "Datos insertados";
			}else{
				echo "Erro";
			}

		}

	?>
 <center>	
 <section class="" style="background-color: #37DFC9 ;">	
 	<div class="container">
		<h1 class="text-secondary text-center">INGRESAR CURSO</h1>
	</div>
	<div class="col-md-6" >
		<form method="post" >
			<div class="form-group col-md-6">
				<label class="font-weight-bolder" >Nombres Del Docente: </label>
				<input type="text" class="form-control" name="nombres" id="nombres" required="">

			</div>
			<div class="form-group col-md-6">
				<label class="font-weight-bolder" >Apellido Del Docente: </label>
				<input type="text" class="form-control" name="apellidos" id="apellidos" required="">

			</div>
			<div class="form-group col-md-6">
				<label class="font-weight-bolder" >Curso: </label>
				<input type="text" class="form-control" name="curso" id="curso" required="">

			</div>
			<div class="form-group col-md-6">
				<label class="font-weight-bolder" >Numero De Alumnos : </label>
				<input type="text" class="form-control" name="alumnos" id="alumnos" required="">

			</div>
			<div class="form-group col-md-6">
				<label class="font-weight-bolder" >Numero De Aula : </label>
				<input type="text" class="form-control" name="numero" id="numero" required="">

			</div>
			<div>
				<button type="submit" class="btn btn-success"> Guardar </button>
				<a href="presentar.php" class="btn btn-info">Lista</a>
			</div>
          </section>
			
		</form>

		
	</div>
 </center>  

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>