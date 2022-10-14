<!DOCTYPE html>
<html><head>
</head><body>
	
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h1>CALCULADORA</h1>
 
 Numero Decimal<input type='text' name='operando1' value='' size=15>
 <br>
 Convertir a:
 <br>
  
 <input type='radio' name='operador' value='binario'>Binario</br>
 <input type='radio' name='operador' value='octal'>Octal</br>
 <input type='radio' name='operador' value='hexa'>Hexadecimal</br>
 <input type='radio' name='operador' value='todos'>Todos Sistemas</br>
 
 <input type="submit" value="enviar">
 <input type='reset' value="borrar"> 
<br>
<br>
</FORM>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $operando1 = test_input($_POST["operando1"]);
  $operacion = $_POST['operador'];
    
  if($operacion == "binario"){
      $solucion = decbin($operando1);
      echo "La solución es: ".$solucion;
  }else if($operacion == "octal"){
      $solucion = decoct($operando1);
      echo "La solución es: ".$solucion;
  }else if($operacion == "hexa"){
      $solucion = dechex($operando1);
      echo "La solución es: ".$solucion;
  }else if($operacion == "todos"){
      $solucion1 = decbin($operando1);
      $solucion2 = decoct($operando1);
      $solucion3 = dechex($operando1);
      echo "Los resultados en binario->".$solucion1;
      echo "<br>";
      echo "Los resultados en octal-> ".$solucion2;
      echo "<br>";
      echo "Los resultados en hexadecimal->".$solucion3;
      echo "<br>";
  }
  }
   
function test_input($operando1) {
  $operando1 = trim($operando1);
  $operando1 = stripslashes($operando1);
  $operando1 = htmlspecialchars($operando1);
  return $operando1;
}

?>
</body>
</html>