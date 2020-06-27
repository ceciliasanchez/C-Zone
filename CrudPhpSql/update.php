<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Crud- Insertar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/owl.carousel.css" rel="stylesheet">
     <link href="css/owl.theme.default.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
</head>
<body>
    
    <?php
        include("Conexion.php");
        $clientes=new Database();

        if(isset($_POST) && !empty($_POST)){
            $id = intval($_GET['id']);   
            $nombre = $clientes -> limpiar ($_POST["nombres"]);
            $apellido = $clientes -> limpiar($_POST["apellidos"]);
            $curso = $clientes -> limpiar($_POST["curso"]);
            $alumnos = $clientes -> limpiar($_POST["alumnos"]);
            $numero = $clientes -> limpiar($_POST["numero"]);
            $result = $clientes -> actualizar($id, $nombre, $apellido, $curso, $alumnos, $numero);
            if($result){
                echo "Actualizado Correctamente";
        }   else{
                echo "Error al Actualizar";
            }
       
        }
    ?>
    <?php
    $id = intval($_GET['id']); 
    $listado = $clientes ->leerindi($id);
    while($row = mysqli_fetch_object($listado)){
        $id = $row -> Id;
        $nombres = $row -> nombre;
        $apellido = $row -> apellido;
        $curso = $row -> curso;    
        $alumnos = $row -> alumnos;   
        $numero = $row -> numero;
    
    ?>
     

 <center>
    <section class="" style="background-color: #37DFC9 ;">  
    <div class="container">
        <h1 class="text-secondary text-center">ACTUALIZACIÓN DE CURSO</h1>
    </div>
   
    <div class="col-md-6" >
        <form method="post" >
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" >Nombres Del Docente: </label>
                <input type="text" class="form-control" name="nombres" id="nombres" required="" value="<?php echo $nombres; ?>" >
                
            </div>
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" >Apellido Del Docente: </label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" required=""  value="<?php echo $apellido; ?>">

            </div>
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" >Curso: </label>
                <input type="text" class="form-control" name="curso" id="curso" required=""  value="<?php echo $curso; ?>">

            </div>
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" >Numero De Alumnos: </label>
                <input type="text" class="form-control" name="alumnos" id="alumnos" required=""  value="<?php echo $alumnos; ?>">

            </div>
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" >Numero De Aula: </label>
                <input type="text" class="form-control" name="numero" id="numero" required=""  value="<?php echo $numero;?>">
            </div>
            <div>
                <button type="submit" class="btn btn-success"> Guardar </button>
                <a href="presentar.php" class="btn btn-info">Lista</a>
            </div>
            <?php
             }
            ?>
        </form>

       
    </div>
 </section>
 </center>
</body>
</html>