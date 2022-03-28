<?php
require "Login.php";

$usuarioA = new Login("Mar", 1234, "Numeros");
echo $usuarioA->toString();
$usuarioA -> nuevaContrasenia(4567);
$usuarioA->toString();
$usuarioA -> nuevaContrasenia(4567);
$usuarioA->toString();
$usuarioA -> nuevaContrasenia(8910);
$usuarioA->toString();
$usuarioA -> nuevaContrasenia(1111);
$usuarioA->toString();
$usuarioA -> nuevaContrasenia(2003);
$usuarioA->toString();
$usuarioA -> nuevaContrasenia(1234);
$usuarioA->toString();
