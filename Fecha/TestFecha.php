<?php
include "Fecha.php";
echo "Test Fecha.php: \n";
$fecha = new Fecha(30,12,2022);
echo $fecha->fechaExtendida() . "\n";
$fecha -> incrementaUnDia();
echo $fecha->fechaExtendida(). "\n";
$fecha -> incrementaUnDia();
echo $fecha->fechaExtendida(). "\n";
$nuevaFecha = $fecha->incrementa(20);
echo $nuevaFecha-> fechaExtendida();