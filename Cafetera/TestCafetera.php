<?php
include "Cafetera.php";

echo "Test Cafetera:\n";
$cafetera = new Cafetera(1000, 400);
echo $cafetera->__toString();
$cafetera->servirTaza(200);
echo "servirTaza(200):\n".$cafetera->__toString();
$cafetera->servirTaza(250);
echo "servirTaza(250):\n".$cafetera->__toString();
$cafetera->vaciarCafetera();
echo "vaciarCafetera():\n".$cafetera->__toString();
$cafetera -> agregarCafe(600);
echo "agregarCafe(600):\n".$cafetera->__toString();
$cafetera->llenarCafetera();
echo "llenarCafetera():\n".$cafetera->__toString();