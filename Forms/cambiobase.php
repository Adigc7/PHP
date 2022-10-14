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
        echo "Los resultados son: binario->".$solucion1 ." octal-> ".$solucion2 ." hexadecimal->".$solucion3;
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