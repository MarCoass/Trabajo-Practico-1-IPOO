<?php
include "Linea.php";
echo "Test Linea: \n";
$linea = new Linea(1,2,5,6);
echo $linea->__toString()."\n";
$linea->mueveDerecha(2);
echo "Mueve 2 derecha: ".$linea->__toString(). "\n";
$linea->mueveIzquierda(2);
echo "Mueve 2 izquierda: ".$linea->__toString(). "\n";
$linea->mueveArriba(2);
echo "Mueve 2 arriba: ".$linea->__toString(). "\n";
$linea->mueveAbajo(2);
echo "Mueve 2 abajo: ".$linea->__toString() . "\n";