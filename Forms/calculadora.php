<?php

	$operando1 = $_POST['operando1'];
	$operando2 = $_POST['operando2'];
	$operadorsigno = $_POST['operador'];
    
   
	if($operadorsigno == "suma"){
		$solucion = $operando1 + $operando2;
	}else if($operadorsigno == "resta"){
		$solucion = $operando1 - $operando2;
	}else if($operadorsigno == "multiplicacion"){
		$solucion = $operando1 * $operando2;
	}else if($operadorsigno == "division"){
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ".$solucion;
    
?>