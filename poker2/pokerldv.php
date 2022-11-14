
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$nombre3 = $_POST['nombre4'];
	$nombre4 = $_POST['nombre4'];
	$nombre5 = $_POST['nombre5'];
	$nombre6 = $_POST['nombre6'];
	$nombre7 = $_POST['nombre7'];
	$nombre8 = $_POST['nombre8'];

	include("pokerldv_fun.php");

 baraja($baraja);

$jugadores=array();

$jugadoresContador=false;
$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");

$jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores,$baraja);
$validar=count($jugadores);
echo $validar ." jugadores"."<br>";
echo jugadoresContador($jugadores);

jugar($jugadores,$baraja,$validar);





	}
?>