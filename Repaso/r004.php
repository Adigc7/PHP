<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 4 de repaso, mostrar numeros del 5 al 100 de tres en tres </H1>
<BODY>
<?php

printf("<table border =1>");

//Creamos bucle for para recorrer del 5 al 100
for ($i=5;$i<100;){
    printf("<tr>");
    
    //por cada 3 casillas por fila se crea nueva fila
    for($j = 1; $j<=3;$j++){
            printf("<td>$i</td>");       
       $i++;
     }
     
}
printf("<tr/>");
printf("</table>");


?>		   
</BODY>
</HTML>