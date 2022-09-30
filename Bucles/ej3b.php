<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 1 de bucles, pasar un número a hexadecimal</H1>
<BODY>
<?php

$num="48";
$dec=$num;
$residuo = " ";


    //Creamos función para una vez acumulado resto tras la divisón por base hexadecimal lo traduzca en el array de letras y números de la conversión
    function dec_to($num, $sistema) {
    $valores_hexa = array(10 => 'A', 11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E', 15 => 'F');
    if ($sistema > 1 && $sistema < 17) {

        $num_retornar = array();
        while ($num > 1) {

            $residuo = $num % $sistema;
            $num = floor($num / $sistema);
            $num_retornar[] = $residuo > 9 ? $valores_hexa[$residuo] : $residuo;

        }
         return implode('', array_reverse($num_retornar)); //Damos la vuelta al resto para poder hacer bien la conversión
    }
    return 'Verifica que el sistema al que deseas convertir sea válido';

}

echo "El número "."$dec"." en hexadecimal es ".dec_to(48,16)."<br>";

?>		   
</BODY>
</HTML>