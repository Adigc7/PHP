<HTML>
<HEAD> Arrays Unidimensionales - Adriana Gracia</HEAD>
<H1> Ejercicio 8, arrays asociativos con notas</H1>
<BODY>
<?php

//Creamos arrays con datos
$baseDatos = array("Belén" => "5", "Juan" => "7", "Luis" => "4", "Adri" => "10", "Elena" =>"8");


//recorremos arrays con bucle foreach

foreach($baseDatos as $nombre=>$edad)
	{
	echo "El alumn@ " . $nombre . " tiene la nota " . $edad ;
	echo "<br>";
	}
	
    $top_student = array_search(max($baseDatos),$baseDatos);

    echo "La alumna con mayor nota es: " .$top_student;
    echo "<br>";
    $top_student = array_search(min($baseDatos),$baseDatos);

    echo "El alumno con menor nota es: " .$top_student;
    echo "<br>";

    $suma = array_sum($baseDatos);

    $total_numeros=count($baseDatos);

    $media = $suma / $total_numeros;

    echo "La media de clase es: " .$media ;




?>		  
</BODY>
</HTML>