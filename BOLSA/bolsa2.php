
<?php
//Incluimos el php con funciones bolsa con include(), llamaos al valor con POST y llamamos a la función valor() para que nos de la linea que queremos de dicho valor.
include("funciones_bolsa.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$valor = $_POST["valor"];
	echo valor($valor);
};

?>