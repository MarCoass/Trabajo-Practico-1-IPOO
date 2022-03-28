<?php
include "CuentaBancaria.php";
echo "Test Cuenta Bancaria: \n";
$cuenta = new CuentaBancaria(1,1234,10,50);
echo $cuenta->__toString()."\n";
$cuenta->actualizarSaldo();
echo $cuenta->__toString()."\n";
$cuenta->depositar(300);
echo $cuenta->__toString()."\n";
$cuenta->retirar(400);
$cuenta->retirar(300);
echo $cuenta->__toString()."\n";