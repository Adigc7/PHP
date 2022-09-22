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

printf("IP $num en binario es %08b.%08b.%08b.%08b <br/>",$ip1,$ip2,$ip3,$ip4); 

$ip5="10.33.161.2"."<BR>";
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
printf("IP $num5 en binario es %08b.%08b.%08b.%08b <br/>",$ip6,$ip7,$ip8,$ip9);

?>
</BODY>
</HTML>
		   
</BODY>
</HTML>
