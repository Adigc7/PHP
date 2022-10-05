<HTML>
    <BODY>
<?php 

// $i = 0;
$carton=array();
// while($i < 12){
//     generarCarton($carton);
//     $i++;
// }
echo "PEPE";
$pepe1 = generarCarton($carton);
var_dump($pepe1);
$pepe2 = generarCarton($carton);
var_dump($pepe2);
$pepe3 = generarCarton($carton);
var_dump($pepe3);
$juan3 = generarCarton($carton);
$juan2 = generarCarton($carton);
$juan1 = generarCarton($carton);
$luisa3 = generarCarton($carton);
$luisa2 = generarCarton($carton);
$luisa1 = generarCarton($carton);
$antonio3 = generarCarton($carton);
$antonio2 = generarCarton($carton);
$antonio1 = generarCarton($carton);
$cartonbingo = array();


// $ganador = bingo($pepe1);
// var_dump($ganador);

$i = 0;
while($i<15)  
{  
    $numerosCarton=rand(1,60);  
    if(in_array($numerosCarton,$cartonbingo)===false) 
    {  
        array_push($cartonbingo,$numerosCarton);  
        $i++;  
    }  
}
//$nombre = ($pepe1, $pepe2, $pepe3, $luisa1, $luisa2, $luisa3, $antonio3, $antonio2, $antonio1, $juan1, $juan2, $juan3;
echo "BINGO";
var_dump($cartonbingo);

function revisión ($nombre, $cartonbingo){
    $resultado = array_diff($nombre,$cartonbingo);
    print_r($resultado);
    if(count($resultado) != 15){
        echo " no es ganador";
    }else echo "es ganador ";

}
echo "El cartón de Pepe ";
revisión($pepe1,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El segundo cartón de Pepe ";
revisión($pepe2,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El tercer cartón de Pepe ";
revisión($pepe3,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El cartón de Juan ";
revisión($juan1,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El segundo cartón de Juan ";
revisión($juan2,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El tercero cartón de Juan ";
revisión($juan3,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El cartón de Luisa ";
revisión($luisa1,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El segundo cartón de Luisa ";
revisión($luisa2,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El tercera cartón de Luisa ";
revisión($luisa3,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El cartón de Antonio";
revisión($antonio1,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El segundo cartón de Antonio";
revisión($antonio2,$cartonbingo);
echo "<br>";
echo "<br>";
echo "El tercer cartón de Antonio";
revisión($antonio3,$cartonbingo);
echo "<br>";
echo "<br>";


    


function generarCarton($carton){  
    $i=0;  
    while($i<15)  
    {  
        $numerosCarton=rand(1,60);  
        if(in_array($numerosCarton,$carton)===false) 
        {  
            array_push($carton,$numerosCarton);  
            $i++;  
        }  
    }
    return $carton; 
}

// function bingo($carton){
//     $numerosTachados=0;
//     $fueradelBombo=array();

//     while($numerosTachados < count($carton)) { 
//         $numeroAleatorio=rand(1,60); 

//        if (!in_array($numeroAleatorio,$fueradelBombo)) { 
//             array_push($fueradelBombo,$numeroAleatorio);
         
//         echo "El numero al azar es: $numeroAleatorio <br>";
//             for($i=0; $i<count($carton); $i++){ 
//                 if($numeroAleatorio===$carton[$i]) { 
//                 $carton[$i]="x";  
//                 $numerosTachados++;
//                 }
//              echo("$carton[$i]/");
//             }
//              echo("<br>");
//         }
//     }
//     return "es el ganador";

// }


 ?>
</BODY>
</HTML>