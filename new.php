<!DOCTYPE html>
<html>
<body>
<h1>creating a php page</h1>
<h2> string functions</h2>
<h3> Operators </h3>
<?php
define("GREETING", "Welcome to W3Schools.com!"."<br>");
echo GREETING;
echo "my first php script to learn php"."<br>";
$txt = "w3schools"."<br>";
$n= 12.4;
$m= (int)$n;
echo "$m"."<br>";
define("php","this is php sesion");
echo php."<br>";
echo strlen("php session");
echo strpos("php", p);
$b = 'A';
$c=true;
//$d= array("pk","kp","kl");
//var_dump($d);
echo " i love $txt"."<br>";
echo " $b"."<br>";
echo " $c ";
echo "$d";
echo " Today is ".date("Y/m/d") ;
echo "<p style='color:red;'>" . $txt . "</p>";
function writeMsg(){
$tx = "hello";
echo "hello $tx" ."<br>";
//operators
$x=4;
$y=5;
echo  "sum is ";
echo $x + $y."<br>";
echo "subtract is ";
echo $x - $y."<br>";
echo "multiply is ";
echo $x * $y."<br>";
echo "exponent is ";
echo $x**$b."<br>";
echo "+= x increased by 10 ";
$x += 10;
echo $x."<br>";
$x -=10;
echo "-= x decreased by 10 ";
echo $x."<br>";
echo " x ==y ";
var_dump($x==$y);
echo " "."<br>";
echo "x not equal y ";
var_dump($x<>$y);




}
writeMsg();

?>
</body>
</html>



