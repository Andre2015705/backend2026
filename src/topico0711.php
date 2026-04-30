<?php
echo "<h1>While</h1>";
$i=0;
while($i<=10){
    echo "$i";
    $i+=2;
}
/*
Saída: 012345
1) Valor inicial = 0
2) condição? = $i menor igual que 5
3) contador? +1 $i++
4) quantas vezes o looping foi executado - 6x
5) valor que torna a condição falsa? - 6
-----------------------------------------
Saída: 11 12 13 14
1) Valor inicial? 11
2) condição? $i < 15
3) contador? $i++
4) quantas vezes o looping foi executado? 4x
5) valor que torna a condição falsa? 15
-----------------------------------------
Saída: 4 3 2 1 0
1) Valor inicial? 4
2) condição? $i >= 0
3) contador? $i--
4) quantas vezes o looping foi executado? 5x
5) valor que torna a condição falsa? -1
-----------------------------------------
Saída: 0 2 4 6 8 10
1) Valor inicial? 0
2) condição? $i <= 10
3) contador? $i+=2;
4) quantas vezes o looping foi executado? 6
5) valor que torna a condição falsa? 12
*/
echo "<h1> Do While </h1>";
$b=7;

do{
    Echo "$b";
    $b++;
}while($b<5);

/*
Saída: 7
1) Valor inicial? 7
2) condição? $b<5
3) contador? $b++
4) quantas vezes o looping foi executado? 1
5) valor que torna a condição falsa? 8
*/
 echo "<h1>For</h1>";

 for($m=0;$m<5;$m++) echo "$m";
 
echo "<h1>Looping Aninhado</h1>";

//pra cada vez que rodar a $a, a $c vai rodar todas as vezes

for($a=3;$a<5;$a++){
    for($c=0;$c<3;$c++){
        Echo "$a $c<br>";
    }
}
/*
a c
0 0
0 1
1 0
1 1
2 0
2 1

*/
?>