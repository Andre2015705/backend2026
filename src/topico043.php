<?php
$a=10;//a = 10 int - inteiro
$b="10";//b = "10" string - texto
echo "Igualdade = ".($a==$b)."<br>";//verdadeiro
echo "Idêntico = ".($a===$b)."<br>";//falso
echo "Não igual = ".($a!=$b)."<br>";//falso
echo "Não Idêntico = ".($a!==$b)."<br>";//verdadeiro
echo "<hr>";
$c=20;
$d=40;
$e=500;
$f=!($c>$d);
var_dump($f);
echo "<hr>";
$g=($c<$e)&& !($e>1000);
var_dump($g);
echo "<hr>";
$f=!($c<$e)||($e>1000);
var_dump($f);
echo "<hr>";
$a=50;
$b=120;
$c=200;
$d=!($a<=$b) ? "Suicida" : "Perereca";
$e=!($a>=$c) ? "Suicida" : "Perereca";
echo "d = $d<br>e = $e";

?>