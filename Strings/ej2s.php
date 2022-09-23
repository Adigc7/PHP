<HTML>
<HEAD> Conversión de IP a binario</HEAD>
<H1> Ejercicio 1, Conversión de IP a binario</H1>
<BODY>
<?php
           $ip="192.18.16.204";
		   echo"La ip de ejemplo es $ip"."<BR>";

$ip="192.18.16.204";
$num="192.18.16.204";

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

$ip=substr($ip,strpos($ip,'.')+1);
$ip4=substr($ip,0);
//echo "Última parte de la IP $ip4 "."<BR>";

//printf("IP $num en binario es %08b.%08b.%08b.%08b <br/>",$ip1,$ip2,$ip3,$ip4); 
/*
echo decbin($ip1).".";
echo decbin($ip2).".";
echo decbin($ip3).".";
echo decbin($ip4);
*/

$a = decbin($ip1);
$a = substr("00000000",0,8 -strlen($a)) . $a;

$b = decbin($ip2);
$b = substr("00000000",0,8 -strlen($b)) . $b;

$c = decbin($ip3);
$c = substr("00000000",0,8 -strlen($c)) . $c;

$d = decbin($ip4);
$d = substr("00000000",0,8 -strlen($d)) . $d;

echo "La IP en binario es ".$a.".".$b.".".$c.".".$d."<BR>";


$ip5="10.33.161.2";
$num5="10.33.161.2";

$ip6=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo "Primera parte de la IP"."<BR>";
//echo "$ip1 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip7=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo "Segunda parte de la IP"."<BR>";
//echo "$ip2 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip8=substr($ip5,0,strpos($ip5,'.'));
$ip5=substr($ip5,strpos($ip5,'.')+1);
//echo " Tercer tramo de la IP"."<BR>";
//echo "$ip3 "."<BR>";
//echo "- Resto de la ip: $ip"."<BR>";

$ip5=substr($ip5,strpos($ip5,'.')+1);
$ip9=substr($ip,0);
//echo "Última parte de la IP $ip4 "."<BR>";
echo"La ip de ejemplo es $num5"."<BR>";
//printf("IP $num5 en binario es %08b.%08b.%08b.%08b <br/>",$ip6,$ip7,$ip8,$ip9);

$e = decbin($ip6);
$e = substr("00000000",0,8 -strlen($e)) . $e;

$f = decbin($ip7);
$f = substr("00000000",0,8 -strlen($f)) . $f;

$g = decbin($ip8);
$g = substr("00000000",0,8 -strlen($g)) . $g;

$h = decbin($ip9);
$h = substr("00000000",0,8 -strlen($h)) . $h;

echo "La IP en binario es ".$e.".".$f.".".$g.".".$h

?>
</BODY>
</HTML>
		   
</BODY>
</HTML>