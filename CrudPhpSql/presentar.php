<?php
    include("Conexion.php");
    $clientes=new Database();
    $listado = $clientes ->leer();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Informacion De Cursos </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/owl.carousel.css" rel="stylesheet">
     <link href="css/owl.theme.default.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
</head>

<body>
<section class="" style="background-color: #37DFC9 ;">  

<div class="container">
    <br><br>
    <h1 class="text-secondary text-center">Informacion De Cursos </h1>
    <br><br>
    <div class="table-wrapper">
        <div class="row">
            <div class="col-4">
                <a href="insertar.php" class="btn btn-info">Agregar Curso</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombres Del Docente</th>
                    <th>Apellidos Del Docente</th>
                    <th>Curso</th>
                    <th>Numero De Aulumnos</th>
                    <th>Numero De Aula</th>
                    <th>Opciones</th>
                </tr>
            <tbody> 
                <?php
                    while($row = mysqli_fetch_object($listado)){
                        $id = $row -> Id;
                        $nombres = $row -> nombre;
                        $apellido = $row -> apellido;
                        $curso = $row -> curso;    
                        $alumnos = $row -> alumnos;   
                        $numero = $row -> numero;  
                ?>

                <tr>
                    <td><?php echo $nombres; ?></td>
                    <td><?php echo $apellido; ?></td>
                    <td><?php echo $curso; ?></td>
                    <td><?php echo $alumnos; ?></td>
                    <td><?php echo $numero; ?></td>
                    <td>
                       <a class="btn btn-primary" href="update.php?id=<?php echo $id?>" >Actualizar</a>
                       <a class="btn btn-danger" href="borrar.php?id=<?php echo $id?>">Borrar</a>
                    </td>
                </tr>
                <?php
                  }
                ?>
                

                </tbody>
            </thead>
        </table>
    </div>
</div>
  <div class="owl-carousel">

      <div class="container container-header"> 
       <div class="row">
          <div class="col-xs-offset-0 col-xs-20 col-md-offset-500 col-md-9000"> 
            <img class="img-responsive" src="img/imagen2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="container container-header">
        <div class="row">
          <div class="col-xs-offset-0 col-xs-20 col-md-offset-500 col-md-9000">
            <img class="img-responsive" src="img/imagen1.jpg" alt="">
            </div>
        </div>
      </div>
       <div class="container container-header">
        <div class="row">
          <div class="col-xs-offset-0 col-xs-20 col-md-offset-500 col-md-9000">
            <img class="img-responsive" src="img/imagen31.jpg" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
   </section>  
 
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/main.js"></script>  
</body>
</html>