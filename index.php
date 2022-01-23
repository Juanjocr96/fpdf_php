<!--Juanjo Carrasco Rodríguez-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>PDF en PHP</title>
  </head>
  <body>
    <h1>Pasar una tabla de BD a PDF</h1>
    <h2>Listado de alumnos del centro</h2>
    <?php
      include_once 'procesos.php';

      $procesos = new Procesos;
      $procesos->consulta(); //Ejecutamos consulta

      if(isset($_POST["enviar"])){
        $procesos->convertir(); //Cuando pulsemos el boton, se crea el pdf
      }
    ?>
    <br />
    <form method="post">
      <input type="submit" name="enviar" value="Convertir a pdf">
    </form>
  </body>
</html>
