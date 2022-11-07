<?php



include("pokerldv_fun.php");

echo baraja($baraja);

echo $jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores);

echo jugadoresContador($jugadores);
echo sacarMano($baraja);








?>