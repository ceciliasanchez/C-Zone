<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="practica2";

		function __construct(){
			$this-> connect_db();
		}

		public function connect_db(){
			$this ->con= mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("error ".mysqli_connect_error());
			}
		}

		public function limpiar($var){
			$return=mysqli_real_escape_string($this->con,$var);

			return $return;
		}

		public function insertar($nombre,$apellido,$curso,$alumnos,$numero){
			$sql="INSERT INTO `cliente`(`nombre`, `apellido`, `curso`, `alumnos`, `numero`) VALUES ('$nombre','$apellido','$curso','$alumnos', '$numero')";
		
			$rest=mysqli_query($this->con, $sql);
			if ($rest) {
				return true;
				echo "inserto";
			}
			else{
				return false;
				echo "no puede insertar";
			}
		}
		public function leer(){
			$sql = "SELECT * FROM cliente";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		public function leerindi($id){
			$sql = "SELECT *  FROM cliente WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		public function borrar($id){
			$sql ="DELETE  FROM cliente WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return $res;
			}
			else{
				return $res;
			}
		}
		function actualizar($id, $nombres, $apellidos, $curso, $alumnos, $numero){
            $sql =  "UPDATE `cliente` SET nombre = '$nombres', apellido= '$apellidos', curso = '$curso', alumnos = '$alumnos', numero = '$numero'  WHERE cliente.id = $id ";
            $result = mysqli_query($this->con, $sql);
            if ($result) {
				$ok = true;
			}else{
				$ok =  false;
            }
            return $ok;
        }

	}





?>