<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido1 = test_input($_POST["apellido1"]);
  $apellido2 = test_input($_POST["apellido2"]);
  $fecha = test_input($_POST["fecha"]);
  $localidad = test_input($_POST["localidad"]);


//Abrimos fichero, en caso de error avisar de que no se ha creado. Poner argumentos con su tamaño acompañado hasta siguiente con #, cerramos fichero.
$fichero = fopen ("alumnos2.txt","a") or die ("Fichero no creado");
fwrite($fichero,str_pad($nombre,39,"#"));
fwrite($fichero,str_pad($apellido1,40,"#"));
fwrite($fichero,str_pad($apellido2,41,"#"));
fwrite($fichero,str_pad($fecha,9,"#"));
fwrite($fichero,str_pad($localidad,26,"#"));
fwrite($fichero, "\n");

	//Creamos tabla con datos del fichero
echo "<h1>Datos Alumnos</h1>";
		echo "<table border=1>
        <th>Nombre</th><th>Apellidos1</th><th>Apellidos2</th><th>Fecha</th><th>Localidad</th>";
		echo "<tr><td>$nombre</td><td>$apellido1</td><td>$apellido2</td><td>$fecha</td><td>$localidad</td></tr>";
	
	//Contamos filas del fichero y mostramos por pantalla
        $archivo = "alumnos2.txt";
        $lineas = count(file($archivo));
        echo "<br>";
        echo "El archivo alumno2.txt $archivo contiene $lineas lineas";
};

//Filtramos arguemntos de espacios, carcateres esppeciales y barra slash
function test_input($data) {
  $data = trim($data);
  $data= stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
