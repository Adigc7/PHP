<!DOCTYPE html>
<html>

<head>
</head>

<body>
	
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h1>CONVERSOR BINARIO</h1>

Numero decimal <input type='text' name='operando1' value='' size=15><br>

<br>

<input type="submit" value="enviar">
<input type='reset' value="borrar">      
<br>
<br>
<br>
</FORM>

<?php

$operando1 = $_POST['operando1'];

$operando1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $operando1 = test_input($_POST["operando1"]);

}

function test_input($operando1) {
  $operando1 = trim($operando1);
  $operando1 = stripslashes($operando1);
  $operando1 = htmlspecialchars($operando1);
  return $operando1;
}

echo "El número decimal es: " .$operando1;

echo "<br>";

$resultado = binario($operando1);

echo "El númro binario es: " .$resultado;

echo "<br>";

function binario($a) {

return decbin($a);
}



?>
</body>

</html>

 