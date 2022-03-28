<?php
//\n
include "Teatro.php";
echo "Test Teatro\n";
$funcion1=["nombre"=> "El rey leon", 
            "precio"=> 30];
$funcion2=["nombre"=> "Pinocho", 
            "precio"=> 40];
$funcion3=["nombre"=> "La sirenita", 
            "precio"=> 20];
$teatro = new Teatro("Teatro" , "Centro", [$funcion1, $funcion2, $funcion3]);
echo $teatro->__toString();