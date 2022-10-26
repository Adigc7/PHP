<HTML>
<HEAD> Arrays Unidimensionales</HEAD>
<H1> Ejercicio 2, media de impares y pares</H1>
<BODY>
<?php

$contador=0;
$array =[];
$suma=0;

//Recorremos con array los impares y los almacenamos
while (count($array)<20){
    if ($contador%2!=0){
        $array[]=$contador; 
    }
    $contador++;
}

printf("<table border='1'><tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>");
//Recorremos con for para guardar en sumatorio datos del array
for ($i =0;$i<count($array);$i++){

$suma= $suma + $array[$i];
printf("<tr><td>$i</td><td>$array[$i]</td><td>$suma</td><tr>");
}
//Inicializamos contadores
$sumaPares=0;
$sumaImpares=0;
$contadorPares=0;
$contadorImpares=0;
//Recorriendo con bucle almacenamos los pares e impares en variables
for($j =0; $j<count($array);$j++){

        if($j%2==0){
            $contadorPares++;
            $sumaPares = $sumaPares + $array[$j];
        }else{
            $contadorImpares++;
            $sumaImpares = $sumaImpares + $array[$j];
        }
}
   //Hacemos la media de ambos mediante sumatorio y la división del contador
$mediaPares = $sumaPares/$contadorPares;
$mediaImpares = $sumaImpares/$contadorImpares;
printf("</table>");

printf("La media de pares es: "."$mediaPares"."<br>");
printf("La media de impares es: "."$mediaImpares");
?>		  
</BODY>
</HTML>
