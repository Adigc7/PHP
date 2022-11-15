
<?php
//Mediante método POST obtenemos valores de nombres
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$nombre3 = $_POST['nombre3'];
	$nombre4 = $_POST['nombre4'];
	$nombre5 = $_POST['nombre5'];
	$nombre6 = $_POST['nombre6'];
	$nombre7 = $_POST['nombre7'];
	$nombre8 = $_POST['nombre8'];
	$bote = $_POST['bote'];

	//Incluimos funciones de poker para ejecutarlas
include("pokerldv_fun.php");

	//Declaramos el array baraja, jugadores y su contador
$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");
$jugadores=array();
$jugadoresContador=false;

//Realizamos función de barajear las cartas
baraja($baraja);

//Validamos el array jugadores mediante función calidar jugadores
$jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores,$baraja);

//Vemos la cantidad de jugadores validados
$validar=count($jugadores);
echo "Hay el total de: " .$validar ." jugadores"."<br>";
echo jugadoresContador($jugadores);

//Declaramos array de cartas
$arrayCartas=array();
//Iniciamos el juego con la función sacarMano con el array de cartas
$arrayCartas=sacarMano($baraja,$jugadores);
//var_dump($jugadores);

//Con función grupo vemos jugadores con sus manos, el bote adjudicado según la mano y su premio
$jugadores=grupo($jugadores,$arrayCartas,$bote);

}
?>