<!DOCTYPE html>
<html><head>
</head><body>
	
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Cambio de Base</h1>
		<label>Numero: </label>
		<input type="text" name="numero"/>
		<br><br>
		<label>Nueva Base: </label>
		<input type="text" name="base"/>
		<br><br>
		<input type="submit" name="submit" value="Cambio Base"/>
		<input type="reset" name="reset" value="Borrar"/>
	</form>
    <?php

$numero = test_input ($_POST["numero"]);
$base = test_input ($_POST["base"]);
$base2 = obtenerBase($numero);
$numero2 = obtenerNumero($numero);
$numeroConvertido = convertir($numero2, $base2, $base);

echo "<h1>Cambio de Base</h1>";
echo "<br>";
echo "Numero " . $numero2 . " en base " . $base2 . "= " . $numeroConvertido . " en base " . $base;


function obtenerNumero ($a){
	// Guardamos en la variable, de la posicion 0 hasta que encuentre "/" en la variable a.
	$noBase=substr($a,0,strpos($a,'/'));
	return $noBase;
}

function obtenerBase($a){
	// Guardamos en la variable, desde que encuentre "/" en adelante.
	$base=substr($a,strpos($a,'/')+1);
	
	return $base;
}

function convertir ($a, int $b, int $c){
	// Hacemos un cast de int a string para la funcion siguiente
	$a = strval($a);
	// $a tiene que ser si o si string
	return base_convert($a, $b, $c);
}
function test_input($numero){
	$numero = trim($numero);
	$numero = stripslashes($numero);
	$numero = htmlspecialchars($numero);
	return $numero;
}

?>
</body>
</html>

