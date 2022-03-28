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

//SUMA
echo "----------------SUMA---------------------------
";
$cuenta -> suma();
echo $cuenta->getValorA() . " + " . $cuenta->getValorB() ." = " . $cuenta->__toString();
//RESTA
echo "
---------------------RESTA----------------------
";
$cuenta -> resta();
echo $cuenta->getValorA() . " - " . $cuenta->getValorB() ." = " . $cuenta->__toString();
//MULTIPLICACION
echo "
---------------------MULTIPLICACION----------------------
";
$cuenta -> multiplicacion();
echo $cuenta->getValorA() . " * " . $cuenta->getValorB() ." = " . $cuenta->__toString();
//DIVISION
echo "
---------------------DIVISION----------------------
";
$cuenta -> division();
echo $cuenta->getValorA() . " / " . $cuenta->getValorB() ." = " . $cuenta->__toString();


