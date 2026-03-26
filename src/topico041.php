
<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);// 12
echo "<br>Subtração:".($a - $b);// 8
echo "<br>Multiplicação:".($a * $b);// 20
echo "<br>Divisão:".($a / $b);// 5
echo "<br>Módulo:".($a % $b);// 0 
echo "<br>Exponenciação:".($a ** $b);// 100
?>
<hr>
<?php
$a=10;
$b=2;
$a+=$b;//$a = 10+2 = 12
$b-=5;//$b2 = 2-3 = -3
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;//$c = 11%6 = 5
$d+=$a;//$d = 6+12 = 18
echo "<br>c = ".$c;
echo "<br>d = ".$d;
$nome="Rapariga";
echo "<br> $nome.$d";
$c.="cinco";
echo "<br> c = $c";
echo "<hr>";
?>
<?php
$x = 100;
echo "x = ".$x++;
echo "<br>x final = ".$x;
"<br>";
$i=10;
echo "<br>i = $i";
$i++;
$i++;
++$i;
echo "<br>i = $i";
$i--;
--$i;
echo "<br>i = $i";

?>