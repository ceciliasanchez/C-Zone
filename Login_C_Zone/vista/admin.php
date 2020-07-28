<?php include 'partials/head.php';?>

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
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
		<div class="jumbotron">
			<div class="container text-center">
			<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
				<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
					<div class="col-4">
                <a href="registro.php" class="btn btn-info">Agregar Nuevo Usuario</a>
				<?php include 'presentar.php';?>
            </div>
				</p>

			</div>
		</div>
	</div>
	
</div><!-- /.container -->
<<<<<<< HEAD



<?php include 'partials/footer.php';?>



=======
<?php include 'partials/footer.php';?>

>>>>>>> Andres
