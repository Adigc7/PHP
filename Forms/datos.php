<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$nombre = test_input($_POST["nombre"]);
	$apellido1 = test_input($_POST["apellido1"]);
	$apellido2 = test_input($_POST["apellido2"]);
	$email = test_input($_POST["email"]);
	$sexo = test_input($_POST["sexo"]);
	
	if ($nombre == "" || $email == "" || $sexo == ""){
		echo "Campos obligatorios no completos";
	}
	else {
		
		$fichero = fopen ("datos.txt" , "a")  or die("Fichero no creado");
		fwrite($fichero, "Nombre:" . $nombre . "\n");
		fwrite($fichero, "Apellido1:" . $apellido1 . "\n");
		fwrite($fichero, "Apellido2:" . $apellido2 . "\n");
		fwrite($fichero, "Email:" . $email . "\n");
		fwrite($fichero, "Sexo:" . $sexo . "\n");
		fclose($fichero);
		$apellidos = $apellido1 . " " . $apellido2; 
		
		echo "<h1>Datos Alumnos</h1>";
		echo "<table border=1><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Sexo</th>";
		echo "<tr><td>$nombre</td><td>$apellidos</td><td>$email</td><td>$sexo</td></tr>";
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>