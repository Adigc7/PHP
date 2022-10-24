<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido1 = test_input($_POST["apellido1"]);
  $apellido2 = test_input($_POST["apellido2"]);
  $fecha = test_input($_POST["fecha"]);
  $localidad = test_input($_POST["localidad"]);



$fichero = fopen ("alumnos3.txt","a") or die ("Fichero no creado");
fwrite($fichero,str_pad($nombre,39,"#"));
fwrite($fichero,str_pad($apellido1,40,"#"));
fwrite($fichero,str_pad($apellido2,41,"#"));
fwrite($fichero,str_pad($fecha,9,"#"));
fwrite($fichero,str_pad($localidad,26,"#"));
fwrite($fichero, "\n");
fclose($fichero);

echo "<h1>Datos Alumnos</h1>";
		echo "<table border=1>
        <th>Nombre</th><th>Apellidos1</th><th>Apellidos2</th><th>Fecha</th><th>Localidad</th>";
		echo "<tr><td>$nombre</td><td>$apellido1</td><td>$apellido2</td><td>$fecha</td><td>$localidad</td></tr>";

        $archivo = "alumnos3.txt";
        $lineas = count(file($archivo));
        echo "<br>";
        echo "El archivo $archivo contiene $lineas lineas";
};

function test_input($data) {
  $data = trim($data);
  $data= stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>