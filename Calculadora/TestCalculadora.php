<?php
include 'Calculadora.php';
//Definicion de variables
$opcion;
$signo;

$cuenta = new Calculadora(0, 0); //Creo una instancia de Calculadora
echo "Test de Calculadora.php con valores Random
----------------------------------------------------
";
$a = rand(0, 50);
$b = rand(0, 50);

echo "Valor A = " . $a . "
Valor B = " . $b ." 
";

$cuenta->setValorA($a);
$cuenta->setValorB($b);
echo $cuenta -> __toString();
