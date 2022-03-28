<?php
include "Cuadrado.php";
//\n

$puntoA = ["x"=> 1, "y"=>5];
$puntoB = ["x"=> 4, "y"=>5];
$puntoC = ["x"=> 1, "y"=>2];
$puntoD = ["x"=> 4, "y"=>2];

echo "Test Cuadrado:
";
$cuadrado = new Cuadrado($puntoA, $puntoB, $puntoC, $puntoD);
echo $cuadrado->__toString() . "\n";
echo "Area: ".$cuadrado -> area()."\n";

$puntoDesplazamiento = ["x"=> 0, "y"=>0];
$cuadrado->desplazar($puntoDesplazamiento);
echo $cuadrado->__toString();

$cuadrado->aumentarTamanio(2);
echo $cuadrado->__toString();