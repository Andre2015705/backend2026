<?php
$a=30;
$a=10;
$a=5;
echo "<br>a = $a";

//    0  1  2
$arr=[30,10,5];
$arr[0]+=5;
echo "<br>arr[0] = ".$arr[0];
echo "<br>arr[1] = ".$arr[1];
echo "<br>arr[2] = ".$arr[2];

//    0    1     2    3
$uf=["SP","RJ","MG","ES"];
echo "<br>".$uf[2];

echo "<pre>";print_r($uf);echo "</pre";
echo "<pre>";print_r($arr);echo "</pre";

$estudante=[
    "id"    =>1,
    "ra"    =>123456,
    "nome"  =>"Bete",
    "curso" =>"TADS"
];
echo "<br>id: ".$estudante["id"];
echo "<br>ra: ".$estudante["ra"];
echo "<br>nome: ".$estudante["nome"];
echo "<br>curso: ".$estudante["curso"];

echo "<pre>";print_r($estudante);echo "</pre";

$matriz=[
    [10,"navio",30],
    [40,"bote",60],
    ["agua",80,"aviao"]
];

echo "<br>tiro1 ".$matriz[0][1];
echo "<br>tiro2 ".$matriz[1][1];
echo "<br>tiro3 ".$matriz[2][0];
echo "<br>tiro4 ".$matriz[2][2];

echo "<pre>";print_r($matriz);echo "</pre";

//prin_r funciona pra qualquer variável do tipo array []

$bd=[
    ["id"=>1,"nome"=>"Bete","curso"=>"TADS"],
    ["id"=>2,"nome"=>"Cleide","curso"=>"TBD"],
    ["id"=>3,"nome"=>"Beto","curso"=>"TJD"]
];

echo "<br>".$bd[1]["id"];
echo "<br>".$bd[2]["curso"];
echo "<br>".$bd[0]["nome"];


?>