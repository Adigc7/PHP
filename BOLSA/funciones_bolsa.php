<?php
//Mediante la función mostrar gracias al bucle leemos linea por linea el fichero txt
function mostrar ($txt){
	while (!feof($txt)){
		$linea = fgets($txt);
		echo $linea . "<br>";
	}
}

/*Mediante la función valor con el bucle foreach vamos linea a linea del texto poniendole como condición mediante substr() 
que entre el hueco 0 y 23 que se encuentrar los nombres quitandole los espacios mediante rtrim(), me de la linea de dicho nombre.
*/
function valor($txt){	
	$z = file("ibex35.txt");	
	foreach ($z as $num_linea => $texto) {
		$buscar = rtrim(substr($texto, 0, 23));
		if (rtrim($buscar) == $txt){
			echo $texto;
		};
	};
}
/*Con la función mostrar2() abrimos el fichero txt para una vez abierto recorrerlo linea a linea con un foreach el cual se va dividiendo
en secciones segun su longitud mediante substr a su vez filtrado con otra función de rtrim() para eliminar espacios. Las secciones que 
divide son valor, cotización, cotización máxima y cotización mínima las cuales invoca según el valor que se elija.
*/
function mostrar2($txt){
   
        $z = file("ibex35.txt");	
        foreach ($z as $num_linea => $texto) {
            
            $valor = rtrim(substr($texto, 0, 23));
            $cotizacion = rtrim(substr($texto, 23, 9));
            $cotiMx = rtrim(substr($texto, 60, 8));
            $cotiMn = rtrim(substr($texto, 69, 8));
            if (rtrim($valor) == $txt){
                echo "El valor de cotización de " . $valor ." es " . $cotizacion . "<br>";
                echo "Cotizacion Maxima de " . $valor ." es " . $cotiMx. "<br>";
                echo "Cotizacion Mínima de " . $valor ." es " . $cotiMn. "<br>";
            };
        }
    
}
/*
Con la función mostrar3, se pasan dos parámetros, el valor del nombre y la opción a mostrar. Según esto, abrimos fichero txt,
mediante foreach lo recorremos línea a línea y a su vez guardamos en variables las secciones que dividimos el texto mediante substr() con la longitud de cada sección
y filtrada de espacios con otra función rtrim(). Una vez dado el nombre del valor, según la opción a mostrar mediante if anidados
damos el valor correspondiente con el nombre elegido.
*/
function mostrar3($valor2,$mostrar){
	
	$z = file("ibex35.txt");	
	
	foreach ($z as $num_linea => $texto) {
		$valor = rtrim(substr($texto, 0, 23));
		$ultimo = rtrim(substr($texto, 23, 9));
		$variacion1 = rtrim(substr($texto,32,8));
		$variacion2 = rtrim(substr($texto,40,8));
		$anual = rtrim(substr($texto,48,11));
		$maximo = rtrim(substr($texto, 60, 8));
		$minimo = rtrim(substr($texto, 69, 8));
		$volumen = rtrim(substr($texto, 78, 12));
		$capital = rtrim(substr($texto, 91, 8));
		$hora = rtrim(substr($texto, 100, 5));
		if (rtrim($valor) == $valor2){
			
			if($mostrar == "ultimo"){	
				echo "Ultima Cotizacion de " . $valor2 . ": " . $ultimo;
			}
			if($mostrar == "variacion1"){	
				echo "Variacion % de " . $valor2 . ": " . $variacion1;
			}
			if($mostrar == "variacion2"){	
				echo "Variacion de " . $valor2 . ": " . $variacion2;
			}
			if($mostrar == "anual"){	
				echo "Ac%Anual de " . $valor2 . ": " . $anual;
			}
			if($mostrar == "maximo"){			
				echo "Maximo de " .$valor2 . ": " . $maximo;
			}
			if($mostrar == "minimo"){			
				echo "Minimo de " . $valor2 . ": " . $minimo;
			}
			if($mostrar == "volumen"){			
				echo "Volumen de " .$valor2 . ": " . $volumen;
			}
			if($mostrar == "capital"){
				echo "Capital de " . $valor2 . ": " . $capital;
			}
			if($mostrar == "hora"){
				echo "Hora de " . $valor2 . ": " . $hora;
			}
		}
	}
}
/*
Con esta función con el argumento pasado de opción a mostrar abrimos el archivo txt, para declarar un array de volumen y otro de capital.
Mediante el bucle foreach lo recorremos linea a linea pero esta vez las secciones pedidas de volumen(seccionadas mediante substr() y limpiadas de espacios con rtrim()) 
las almacenamos en un arrayVol, y los mismos pasos con arrayCapital. Ahora con if anidados segun la opción de mostrar que elijamos con
la función array_sum() sumamos el contenido de arrayVol. Los mismos pasos con arrayCapital si se eligiera esta opción.
*/
function mostrar5($mostrar){
    $z = file("ibex35.txt");
	$arrayVol=array();
	$arrayCapital =array();
	
	foreach ($z as $num_linea => $texto) {
		
		$arrayVol[$num_linea] = rtrim(substr($texto, 78, 12));
		$arrayCapital[$num_linea] = rtrim(substr($texto, 91, 8));
	}
	if ($mostrar == "totalVolumen"){ 
	
		echo "La suma de los volúmenes es " .array_sum($arrayVol);
	}
	if ($mostrar == "totalCapital"){	
		
		echo "La suma del capital es " .array_sum($arrayCapital);
	}

}
/*
Con la función mostrar6 pasamos por parámetro la opción a mostrar para una vez abierto el txt, declaramos los arrays con los valores pedidos
para recorrer el txt con un bucle foreach cada una de sus líneas para una vez segmentadas con su longitud cada campo con substr y limpiada
de espacios con rtrim(), mediante if anidados vamos dando las diferentes opciones de mostrar con funciones de min() para el mínimo y max() y para el máximo
 aplicadas a los arrays pedidos.
*/
function mostrar6($mostrar){
    $z = file("ibex35.txt");
    $arrayCoti=array();
	$arrayVol=array();
    $arrayCapital=array();
	
	foreach ($z as $num_linea => $texto) {
		
		$arrayVol[$num_linea] = rtrim(substr($texto, 78, 12));
		$arrayCapital[$num_linea] = rtrim(substr($texto, 91, 8));
        $arrayCoti[$num_linea] = rtrim(substr($texto, 23, 9));
	}
	if ($mostrar == "maxVolumen"){ 
		echo "El mayor volúmen es " .max($arrayVol);
	}
    if ($mostrar == "minVolumen"){
        echo "El mínimo volúmen es " .min($arrayVol);
    }
	if ($mostrar == "MaxCapi"){	
		echo "El mayor capital es " .max($arrayCapital);
	}
    if ($mostrar == "MinCapi"){	
		echo "El menor capital es " .min($arrayCapital); 
	}
    if ($mostrar == "maxCoti"){	
		echo "La mayor cotización es " .max($arrayCoti);
	}
    if ($mostrar == "minCoti"){	
		echo "La menor cotización es " .min($arrayCoti);
	}

}

?>