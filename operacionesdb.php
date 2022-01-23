<?php
	include ('configdb.php');
	  include_once 'fpdf.php'; //Importar la clase FPDF

	class Conexion{
		function __construct(){
			$this->conexion = new mysqli(SERVIDORBD, USUARIO, PASSWORD, BASEDATOS);
			$this->pdf = new FPDF;
		}

		//Método que recibe la consulta, la prepara y la ejecuta
		function listar($sql){
			$stmt = $this->conexion->prepare($sql);

			echo '<table class="table table-bordered table-dark">';
			echo '<tr>
							<th>ID_ALU</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th>Curso</th>
						</tr>';

			$stmt->execute();
			$resultado = $stmt->get_result();

			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				echo '<tr>
								<td>'.$fila["idAlumno"].'</td>
								<td>'.$fila["nombre"].'</td>
								<td>'.$fila["direccion"].'</td>
								<td>'.$fila["telefono"].'</td>
								<td>'.$fila["idCurso"].'</td>
							</tr>';
			}
		echo '</table>';
		}


		//Método que consulta y manda los datos de la tabla de la base de datos al pdf
		function convertirPDF(){

			$sql = "SELECT idAlumno, nombre, direccion, telefono, idCurso FROM alumnos";

			$stmt = $this->conexion->prepare($sql);
			$stmt->execute();
			$resultado = $stmt->get_result();

			$this->pdf->AddPage(); //Añadir página
			$this->pdf->SetFont('Arial','B',9); //Fuente y tamaño de la letra
			$this->pdf->Write(5,'Listado de alumnos del centro '); //Escrivir una linea

			$this->pdf->Ln(); //Salto de línea

			$this->pdf->SetTextColor(220,50,50); //Cambiar color de texto

			//Títulos para las comlumnas

			$this->pdf->Cell(40,10,'idAlumno');
			$this->pdf->Cell(40,10,'Nombre');
			$this->pdf->Cell(40,10,'Direccion');
			$this->pdf->Cell(40,10,'Telefono');
			$this->pdf->Cell(40,10,'idCurso');

			$this->pdf->SetTextColor(0,0,0); //Volvemos a cambiar el color del texto

			$this->pdf->Ln(); //Salto de linea


			//Recorremos la tabla y vamos mandando los valores de cada fila a una celda
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){

				$this->pdf->Cell(40,10,$fila["idAlumno"]);
				$this->pdf->Cell(40,10,$fila["nombre"]);
				$this->pdf->Cell(40,10,$fila["direccion"]);
				$this->pdf->Cell(40,10,$fila["telefono"]);
				$this->pdf->Cell(40,10,$fila["idCurso"]);
				$this->pdf->Ln();
			}

			ob_clean(); //Limpia el buffer de salida para que no salte un error por escribir antes del output
			$this->pdf->Output();
		}
	}
  ?>
