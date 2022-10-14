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