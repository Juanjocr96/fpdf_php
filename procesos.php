<!--Juanjo Carrasco Rodríguez-->
<?php
	include_once 'operacionesdb.php';

	class Procesos{
		function __construct(){
			$this->conexion = new Conexion;
		}

		//Método que manda la consulta al metodo que la realiza
    function consulta(){
			$sql = "SELECT idAlumno, nombre, direccion, telefono, idCurso FROM alumnos";
			$this->conexion->listar($sql);
		}

		//Método que llama al metodo que convierte a pdf
		function convertir(){
			$this->conexion->convertirPDF();
		}
}
