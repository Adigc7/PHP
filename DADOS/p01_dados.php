<HTML>
    <BODY>
<?php

$jug1 = test_input ($_POST["jug1"]);
$jug2 = test_input ($_POST["jug2"]);
$jug3 = test_input ($_POST["jug3"]);
$jug4 = test_input ($_POST["jug4"]);
$numdados = test_input ($_POST["numdados"]);

//Inicializamos los dados para crear los jugadores
$dado1=0;
$dado2=0;
$dado3=0;
$dado4=0;
$dado5=0;
$dado6=0;
$dado7=0;
$dado8=0;
$dado9=0;
$dado10=0;
/*
//Creamos 4 jugadores para en un array poner 3 tiradas con un dado  de 1 a 6
echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
//$jug1 = array(dado($dado1),dado($dado2),dado($dado3));
echo "<br>";
echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
//$jug2 = array(dado($dado1),dado($dado2),dado($dado3));
echo "<br>";
echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";
//$jug3 = array(dado($dado1),dado($dado2),dado($dado3));
echo "<br>";
echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";
//$jug4 = array(dado($dado1),dado($dado2),dado($dado3));

*/
//Función según número de dados
    if($numdados==2){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";
        $jug4 = array(dado($dado1),dado($dado2));
    }
    elseif($numdados==3){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3));
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";     
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3));
    }
    elseif($numdados==4){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4));
    }
    elseif($numdados==5){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5));
    }
    elseif($numdados==6){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6));
    }
    elseif($numdados==7){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7));
    }
    elseif($numdados==8){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8));
    }
    elseif($numdados==9){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9));
    }
    elseif($numdados==10){
        echo "El jugador " .$jug1. " lanza los dados"."<br>"."<br>";
        $jug1 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9),dado($dado10));
        echo "<br>";
        echo "El jugador " .$jug2. " lanza los dados"."<br>"."<br>";
        $jug2 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9),dado($dado10));
        echo "<br>";
        echo "El jugador " .$jug3. " lanza los dados"."<br>"."<br>";    
        $jug3 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9),dado($dado10)); 
        echo "<br>";
        echo "El jugador " .$jug4. " lanza los dados"."<br>"."<br>";    
        $jug4 = array(dado($dado1),dado($dado2),dado($dado3),dado($dado4),dado($dado5),dado($dado6),dado($dado7),dado($dado8),dado($dado9),dado($dado10));
    }elseif($numdados<10){
        echo "No se pueden más de 10 dados";
    }



//Almacenamos todos los jugadores en yna partida y lo mostramos con ver_dump
$tirar = array($jug1, $jug2, $jug3, $jug4);

var_dump($tirar);

//Aqui está la función para generar un numero aleatorio con el dado
function dado(){
    $num=mt_rand(1,6);
    echo "<img src='images/$num.PNG'/>";
    return $num;
}

//Función que suma el resultado de todos los dados
function sumar($j){
    
    return array_sum($j);
}

//Intento de sacar el ganador de el máximo de las sumas
function maxPunt($jug1, $jug2, $jug3, $jug4){


            if(sumar($jug1)==max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4)))){
                return "Jugador " .$_POST["jug1"]." gana con " .max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4))). " puntos";
            }
            if(sumar($jug2)==max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4)))){
                return "Jugador " .$_POST["jug2"]." gana con " .max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4))). " puntos";
            }
            if(sumar($jug3)==max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4)))){
                return "Jugador " .$_POST["jug3"]." gana con " .max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4))). " puntos";
            }
            if(sumar($jug4)==max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4)))){
                return "Jugador " .$_POST["jug4"]." gana con " .max(array(sumar($jug1),sumar($jug2), sumar($jug3),sumar($jug4))). " puntos";
            }

}



//Mostramos con echo los resultados
echo $_POST["jug1"]." tiene: " .sumar($jug1) . " puntos";
echo "<br>";
echo $_POST["jug2"]." tiene: ".sumar($jug2). " puntos";
echo "<br>";
echo $_POST["jug3"]." tiene: " .sumar($jug3). " puntos";
echo "<br>";
echo $_POST["jug4"]." tiene: " .sumar($jug4). " puntos";
echo "<br>";
echo maxPunt($jug1, $jug2, $jug3, $jug4);
echo "<br>";

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>


</BODY>
</HTML>