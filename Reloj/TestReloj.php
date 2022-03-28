<?php
include 'Reloj.php';

$reloj = new Reloj(0,0,0);
echo "Reloj inicial: " . $reloj->__toString()."\n";
for($i=0; $i <= 3600; $i++){
    $reloj -> incremento();
}
echo "Reloj despues de incrementarlo 3600 veces: " . $reloj->__toString()."\n";
echo "\nTest de Modificadores:\n";
$reloj->setHoras(23);
echo "setHoras(23): " . $reloj->__toString()."\n";
$reloj -> setMinutos(2);
echo "setMinutos(2)". $reloj->__toString()."\n";
$reloj -> setSegundos(50);
echo "setSegundos(50)" . $reloj->__toString()."\n";
echo "\nTest de Observadores:\n";
echo "getHoras(): " . $reloj->getHoras()."\n";
echo "getMinutos(): " . $reloj->getMinutos()."\n";
echo "getSegundos(): " . $reloj->getSegundos()."\n";

echo "Incremento hasta superar 23:59:59 -->";
for($i=0; $i <= 3600; $i++){
    $reloj -> incremento();
}
echo $reloj->__toString() ."\n";

$reloj->puesta_a_cero();
echo "Puesta a 0: " . $reloj->__toString();