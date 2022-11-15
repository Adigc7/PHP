<?php

//Meidante método post obtenemos valores de formulario
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$nombre3 = $_POST['nombre3'];
$nombre4 = $_POST['nombre4'];
$nombre5 = $_POST['nombre5'];
$nombre6 = $_POST['nombre6'];
$nombre7 = $_POST['nombre7'];
$nombre8 = $_POST['nombre8'];
$bote = $_POST['bote'];

//Creamos array jugadores para introducir valores
$jugadores=array();
//Creamos array baraja para introducir todas las cartas
$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");

//Creamos objeto jugadores al que se pasa función de validar con atributos
$jugadores=validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores,$baraja);


//Guardamos en variable la cantidad de jugadores
$validar=count($jugadores);

//Función que utilizamos para baraja y mover todas las cartas
function baraja(){
	$baraja = array("1C1","1C2","1D","1D2","1P1","1P2","1T1","1T2","JC1","JC2","JD1","JD2","JP1","JP2","JT1","JT2","KC1","KC2","KD1","KD2","KP1","KP2","KT1","KT2","QC1","QC2","QD1","QD2","QP1","QP2","QT1","QT2");
	shuffle($baraja);
	
}

//Vaidar jugadores y añadir a array con jugadores correctos mediante la función array_push
function validarJugadores($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$jugadores){
	
	if (is_null($nombre1) == false){
		array_push($jugadores,$nombre1);
    }
	if (is_null($nombre2) == false){
		array_push($jugadores,$nombre2);
	}
	
	if (is_null($nombre3) == false){
		array_push($jugadores,$nombre3);
	}
	
	if (is_null($nombre4) == false){
		array_push($jugadores,$nombre4);
	}
	
	if (is_null($nombre5) == false){
		array_push($jugadores,$nombre5);
    }
	
	if (is_null($nombre6) == false){
		array_push($jugadores,$nombre6);
	}
	
	if (is_null($nombre7) == false){
		array_push($jugadores,$nombre7);
	}
	
	if (is_null($nombre8) == false){
		array_push($jugadores,$nombre8);
	}
	
	$jugadores = array_diff($jugadores, array("",0,null));

	return $jugadores;
}

//Función que cuenta jugadores y retorna si son correctos o no
function jugadoresContador($jugadores){

	$contador=count($jugadores);

    $ok=false;
	if($contador<2 || $contador>8){
		return "El número de jugadores no es correcto"."<br>";
	}
	else
	{
		return "El número de jugadores es correcto". "<br>";
		$ok==true;
	}
	
}

//Función para sacar 4 cartas de la baraja junto con su imagen y el nombre del respectivo jugador
function sacarMano($baraja,$jugadores){
	$arrayCartas=array();

	
	for($j=0;$j<count($jugadores);$j++){
		for($i=0;$i<4;$i++){
			$posicion = array_rand($baraja);

			$posicion=$baraja[$posicion];
			//echo $baraja[$posicion]."<br>"; 
			//echo $posicion ."<br>";
           echo "<img src='images/$posicion.PNG' width='60px'>";  
			$posicion=substr($posicion,0,1);
			$arrayCartas[$i]=$posicion;

			
		}
		echo "<br>";
		echo "El jugador " .$jugadores[$j]. " tiene la mano situada arriba:" . "<br>";
		//echo $jugadores[$j]= $posicion . "<br>";
		asort($arrayCartas);
		$jugadores[$j]=$arrayCartas;
		//var_dump($arrayCartas);
		
	}
	
	
		return $jugadores;
	
}


	/*
	Función para empezar a jugar en la que se recorre el array multidimensional viendo la cantidad de veces que se repite el contador de iguales para sacar
	el tipo de mano que es. Una vez obtenida se le adjudica un bote
	*/
function grupo($jugadores,$arrayCartas,$bote){
	asort($arrayCartas);
	var_dump($arrayCartas);

	echo "El bote apostado es: ".$bote."<br>";
	
	for($i = 0 ; $i < count($arrayCartas) ; $i++){

		$contador=0;
		for($i = 0 ; $i < count($jugadores) ; $i++){
			echo "Jugador " .$jugadores[$i]. ":"."<br>";
		
		for($j=0 ; $j<3; $j++){
		
			if($arrayCartas[$i][$j]===$arrayCartas[$i][($j+1)]){
				$contador++;
			}
			
		}
		
		echo "Número de repetición de cartas : " .$contador. "<br>";	
		if($contador === 0){
			echo " no tiene combinaciones de cartas". "<br>";
			
		}
		
		if($contador === 1){
			
			echo " tiene pareja" . "<br>";
			
		}
		
		if($contador === 2){
			
			echo " tiene doble pareja" . "<br>";
		

		}
		
		if($contador === 3){
			
			echo " tiene trio" . "<br>";

		}
		if($contador === 4){
			
			echo " tiene poker" . "<br>";

		}
		
		//$contador=0;
		
		
		echo "<br>";
		}
	
	}
	//echo $contador;

	switch($contador){
		case 4:
		echo "Gana poker se lleva ".$bote. "€";
		break;
		
		case 3:
		$bote2=$bote*0.7;
		echo "Gana trio se lleva " .$bote2."€";
		break;
		
		case 2:
		$bote3=$bote*0.5;
		echo "Gana doble pareja se lleva " .$bote3."€";
		break;
		
		default:
		echo "Tienen pareja no se llevan premio";
		break;
		
	}
}
	


	
	

	


/*
function jugar($jugadores,$baraja){
    if($ok=true){
        for($i=0;$i<count($jugadores);$i++){
            echo "El jugador " .$jugadores[$i]. " tiene la mano:" . "<br>";
            echo $jugadores[$i]=sacarMano($baraja) . "<br>";
			
        }

    }
   
   
}
*/

?>