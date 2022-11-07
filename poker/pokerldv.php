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

echo baraja($baraja);

$jugadores=array();

$jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores);

echo jugadoresContador($jugadores);
echo sacarMano($baraja);


	
	
	}










?>