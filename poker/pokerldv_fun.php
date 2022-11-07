<?php

/*	
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$nombre3 = $_POST['nombre4'];
$nombre4 = $_POST['nombre4'];
$nombre5 = $_POST['nombre5'];
$nombre6 = $_POST['nombre6'];
$nombre7 = $_POST['nombre7'];
$nombre8 = $_POST['nombre8'];
*/

$jugadores=array();

$jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores);

$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");

function baraja(){
	$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");
	shuffle($baraja);
	
}



function validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores){
	
	if (is_null($nombre1) == false){
	
		array_push($jugadores,$nombre1);
	}
	
	if (is_null($nombre2) == false){
	
		array_push($jugadores,$nombre2);
	}
	
	if (is_null($nombre3) == false){
	
		array_push($jugadores,$nombre3);
	}
	
	if (is_null($nombre4) == false){
	
		array_push($jugadores,$nombre4);
	}
	
	if (is_null($nombre5) == false){
	
		array_push($jugadores,$nombre5);
	}
	
	if (is_null($nombre6) == false){
	
		array_push($jugadores,$nombre6);
	}
	
	if (is_null($nombre7) == false){
	
		array_push($jugadores,$nombre7);
	}
	
	if (is_null($nombre8) == false){
	
		array_push($jugadores,$nombre8);
	}
	
	$jugadores = array_diff($jugadores, array("",0,null));
	
	return $jugadores;
	
};

function jugadoresContador($jugadores){

	$contador=count($jugadores);

	if($contador>2 || $contador<8){
		return "El número de jugadores es correcto"."<br>";
	}
	else
	{
		return "El número de jugadores es incorrecto"."<br>";
	}
	
}

function sacarMano($baraja){

	
		for($i=0;$i<4;$i++){
			$posicion = array_rand($baraja);
			
			echo $baraja[$posicion]."<br>";
	}
	
}



?>