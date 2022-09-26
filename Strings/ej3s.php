<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 1, Conversión de IP a binario</H1>
<BODY>
<?php


           $ip="192.168.16.100";
		   $num="192.168.16.100/16";
		   //echo"La ip de ejemplo es $num"."<BR>";

$ip="192.168.16.100";


$ip1=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
//echo "Primera parte de la IP"."<BR>";
//echo "$ip1 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip2=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
//echo "Segunda parte de la IP"."<BR>";
//echo "$ip2 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip3=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
//echo " Tercer tramo de la IP"."<BR>";
//echo "$ip3 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

//printf("IP $num en binario es %08b.%08b.%08b.%08b <br/>",$ip1,$ip2,$ip3,$ip4); 
/*
echo decbin($ip1).".";
echo decbin($ip2).".";
echo decbin($ip3).".";
echo decbin($ip);
*/
/*
$a = decbin($ip1);
$a = substr("00000000",0,8 -strlen($a)) . $a;

$b = decbin($ip2);
$b = substr("00000000",0,8 -strlen($b)) . $b;

$c = decbin($ip3);
$c = substr("00000000",0,8 -strlen($c)) . $c;

$d = decbin($ip);
$d = substr("00000000",0,8 -strlen($d)) . $d;

echo "La IP en binario es ".$a.".".$b.".".$c.".".$d."<BR>";

*/

$ip5="10.33.161.2";
$num5="10.33.161.2";

$ip6=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo "Primera parte de la IP"."<BR>";
//echo "$ip6 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip7=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo "Segunda parte de la IP"."<BR>";
//echo "$ip7 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip8=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo " Tercer tramo de la IP"."<BR>";
//echo "$ip8"."<BR>";
//echo "- Resto de la ip: $ip5"."<BR>";

//echo"La ip de ejemplo es $num5"."<BR>";
//printf("IP $num5 en binario es %08b.%08b.%08b.%08b <br/>",$ip6,$ip7,$ip8,$ip5);
/*
$e = decbin($ip6);
$e = substr("00000000",0,8 -strlen($e)) . $e;

$f = decbin($ip7);
$f = substr("00000000",0,8 -strlen($f)) . $f;

$g = decbin($ip8);
$g = substr("00000000",0,8 -strlen($g)) . $g;

$h = decbin($ip5);
$h = substr("00000000",0,8 -strlen($h)) . $h;

echo "La IP en binario es ".$e.".".$f.".".$g.".".$h
*/

$ip22="192.168.16.100/16";

$ip23=substr($ip22,0,strpos($ip22,'/'));
$ip22=substr($ip22,strpos($ip22,'/')+1);

$masc=$ip22;
$ipnew=$ip23;

echo "La máscara es $masc"."<BR>";
echo "La IP restante es $ipnew"."<BR>";

$ipCort1=substr($ipnew,0,strpos($ipnew,'.'));
$ipnew=substr($ipnew,strpos($ipnew,'.')+1);

$ipCort2=substr($ipnew,0,strpos($ipnew,'.'));
$ipnew=substr($ipnew,strpos($ipnew,'.')+1);

$ipCort3=substr($ipnew,0,strpos($ipnew,'.'));
$ipnew=substr($ipnew,strpos($ipnew,'.')+1);

$binario= sprintf("%08b%08b%08b%08b",$ipCort1,$ipCort2,$ipCort3,$ipnew);
//Ver los bits de host restando la máscara del total

$BitsTotal="32";

$BitsHost = $BitsTotal - $masc;

//Casting para poder operar con funciones

$BitsHostCasting = (String)$BitsHost;

//Remplazar los 1 por ceros segun la máscara

$binarioConCeros=str_replace("1","0",substr($binario, -$BitsHostCasting));


//Cambiar por ceros la parte de red

$binario=substr_replace($binario,$binarioConCeros,-$BitsHostCasting);

//Pasamos la IP a octetos

$ipCort11=substr($binario,0,8);
$ipnew=substr($binario,8);

$ipCort22=substr($ipnew,0,8);
$ipnew=substr($ipnew,8);

$ipCort33=substr($ipnew,0,8);
$ipnew=substr($ipnew,8);

$ipCort44=substr($ipnew,0);

//Tenemos la dirección de red

echo "La dirección de red es: ";
echo $dirRed =bindec($ipCort11).".".bindec($ipCort22).".".bindec($ipCort33).".".bindec($ipCort44)."<BR>";

//Cambiamos 0 por 1 para la dirección de Broadcast mediante los bits de host


$binarioUnos=str_replace("0","1",substr($binario, -$BitsHostCasting));

$binario=substr_replace($binario,$binarioUnos,-$BitsHostCasting);

//Dividimos la IP en octetos

$ipCort111=substr($binario,0,8)."<br/>";
$ipnew=substr($binario,8)."<br/>";

$ipCort222=substr($ipnew,0,8)."<br/>";
$ipnew=substr($ipnew,8)."<br/>";

$ipCort333=substr($ipnew,0,8)."<br/>";
$ipnew=substr($ipnew,8)."<br/>";

$ipCort444=substr($ipnew,0)."<br/>";

//Pasamos el binario a dirección Broadcast

echo "Direccion Broadcast: ";

echo $DirBroad=bindec($ipCort111).".".bindec($ipCort222).".".bindec($ipCort333).".".bindec($ipCort444)."<br/>";

//Dividimos la Ip en puntos

$red1=substr($dirRed,0,strpos($dirRed,"."));

$dirRed=substr($dirRed,strpos($dirRed,".")+1);

$red2=substr($dirRed,0,strpos($dirRed,"."));

$dirRed=substr($dirRed,strpos($dirRed,".")+1);

$red3=substr($dirRed,0,strpos($dirRed,"."));

$dirRed=substr($dirRed,strpos($dirRed,".")+1);

//Sumamos +1 al último octeto

 $red4=substr($dirRed,0)+1; 

 
//Resultado del primer rango

echo "Primer rango: ";

echo $rango1=$red1.".".$red2.".".$red3.".".$red4." a ";

//Dividimos en decimal y separado por puntos mediante dirección de broadcast

$broad1=substr($DirBroad,0,strpos($DirBroad,"."));

$DirBroad=substr($DirBroad,strpos($DirBroad,".")+1);

$broad2=substr($DirBroad,0,strpos($DirBroad,"."));

$DirBroad=substr($DirBroad,strpos($DirBroad,".")+1);

$broad3=substr($DirBroad,0,strpos($DirBroad,"."));

$DirBroad=substr($DirBroad,strpos($DirBroad,".")+1);

//Restamos - 1 al último octeto

 $broad4=substr($DirBroad,0)-1; 

//Resultado del segundo rango

echo "Segundo rango: ";

echo $rango2= $broad1.".".$broad2.".".$broad3.".".$broad4;

?>
</BODY>
</HTML>
		   
</BODY>
</HTML>