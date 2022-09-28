<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 2 de repaso, del 1 al 99 versión 2</H1>
<BODY>
<?php

printf("<table border =1>");

//Creamos bucle for para recorrer del 1 al 100
for ($i=0;$i<100;){
    printf("<tr>"."</br>");
    
    
    //por cada 3 casillas por fila se crea nueva fila
    for($j = 1; $j<=10;$j++){
            printf("<td>$i</td>");       
       $i++;
     }
     
}
printf("<tr/>");
printf("</table>");


?>		   
</BODY>
</HTML>
		   
