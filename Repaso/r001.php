<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 1 de repaso, mostrar numeros del 1 al 99</H1>
<BODY>
<?php

printf("<table border =1>");

//Creamos bucle for para recorrer del 1 al 99
for ($i=1;$i<99;){
    printf("<tr>");
    
    //por cada 10 numeros por fila se crea nueva fila
    for($j = 0; $j<=10;$j++){
        printf("<td>$i</td>");
          
       $i++;
     }
     
}
printf("<tr/>");
printf("</table>");


?>		   
</BODY>
</HTML>