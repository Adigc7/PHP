<HTML>
<HEAD> Arrays Unidimensionales</HEAD>
<H1> Ejercicio 1, 20 números impares</H1>
<BODY>
<?php

$contador=0;
$array =[];
$suma=0;

//Recorremos con bucle while y alamacenar en el contador
while (count($array)<20){
    if ($contador%2!=0){
        $array[]=$contador; 
    }
    $contador++;
}

 //Hacemos tabla con resultados
printf("<table border='1'><tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>");
//recorremos con bucle for para mostrar sumatorio
for ($i =0;$i<count($array);$i++){

$suma= $suma + $array[$i];
 //Cerramos tabla
printf("<tr><td>$i</td><td>$array[$i]</td><td>$suma</td><tr>");
}
printf("</table>");
?>		  
</BODY>
</HTML>
