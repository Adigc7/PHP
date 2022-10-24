<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido1 = test_input($_POST["apellido1"]);
  $apellido2 = test_input($_POST["apellido2"]);
  $fecha = test_input($_POST["fecha"]);
  $localidad = test_input($_POST["localidad"]);



$fichero = fopen ("alumnos2.txt","a") or die ("Fichero no creado");
fwrite($fichero,str_pad($nombre,39,"#"));
fwrite($fichero,str_pad($apellido1,40,"#"));
fwrite($fichero,str_pad($apellido2,41,"#"));
fwrite($fichero,str_pad($fecha,9,"#"));
fwrite($fichero,str_pad($localidad,26,"#"));
fwrite($fichero, "\n");
		
	echo "Se guardan los datos en alumnos2.txt";
  echo "<br>";
  echo "<br>";
	echo "Aqui mostramos su contendio: ";
  echo "<br>";
  echo "<br>";
	//fichero modo lectura.
	$fichero = fopen ("alumnos2.txt" , "r");
	// feof es una funcion nos dice si hemos terminado con el fichero.
	while (!feof($fichero)){
		// fgets nos da la primera linea y despues salta a la siguiente.
		$linea = fgets($fichero);
		echo $linea . "<br>";
	}
	fclose($fichero);

};

function test_input($data) {
  $data = trim($data);
  $data= stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>