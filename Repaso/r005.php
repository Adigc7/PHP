<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 5 de repaso, mostrar numeros del 1 al 100, sumando +3, al final de fila sumatorio </H1>
<BODY>
<?php

$sumatorio=0;

printf("<table border =1>");

//Creamos bucle for para recorrer del 5 al 100
for ($i=1;$i<100;){
    printf("<tr>");
    
    //por cada 3 casillas por fila se crea nueva fila
    for($j = 1; $j<=3;$j++){
            printf("<td>$i</td>");       
        $i=$i+3; //Añadimos +3 para aumentar los numeros correctamente y que se impriman
        $sumatorio=$sumatorio+$i; //Almacenamos en la variable sumatorio la suma total de la fila
     }
    
     printf("<td>"."El sumatorio es: ".".$sumatorio</td>");
     
}
printf("<tr/>");
printf("</table>");



?>		   
</BODY>
</HTML>