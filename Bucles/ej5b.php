<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 5 de bucles, mostrar en pantalla tabla de multiplicar</H1>
<BODY>
<?php

$resultado=0;
$num=8;
printf("<table border =1>");

//Creamos bucle for para recorrer del 5 al 100
for ($i=1;$i<11;){
    printf("<tr>");
    
    //dos casillas horizontales para operación y resultado
    for($j = 1; $j<=1;$j++){
            printf("<td>$num * $i = </td>");       
    
         $resultado=$num * $i; //Almacenamos en la variable resultado la multiplicación
        }$i++;
    
     printf("<td>$resultado</td>");
     
}
printf("<tr/>");
printf("</table>");



?>		   
</BODY>
</HTML>