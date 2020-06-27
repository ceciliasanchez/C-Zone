<?php

    if(isset($_GET['id'])){
        include ("conexion.php");
        $cliente = new Database();
        $id = intval($_GET['id']);
        $res = $cliente ->borrar($id);

        if($res){
            header('location: presentar.php');
        }
        else{
            echo "Error al borrar";
        }
    }

?>