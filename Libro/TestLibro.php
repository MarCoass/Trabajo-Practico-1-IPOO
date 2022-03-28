<?php
include "Libro.php";

function iguales($libro, $arreglo){
    $largoArreglo = sizeof($arreglo);
    $encontrado = false;
    $i=0;
    while (!$encontrado && $i<$largoArreglo){
        $encontrado = $libro->equals($arreglo[$i]);
        $i++;
    }
    return $encontrado;
}

function libroDeEditoriales($arreglolibros, $editorial){
    $arreglo = [];
    $i = 1;
    foreach ($arreglolibros as $libro){
        if($libro->getEditorial()==$editorial){
            $arreglo[$i]=$libro;
            $i++;
        };
    };
    return $arreglo;
}

echo "Test Libro:\n";
$autor1 = ["nombre" => "Stephen", "apellido" => "King"];
$autor2= ["nombre" => "Brandon", "apellido" => "Sanderson"];

$libro1 = new Libro(1, "IT", 1986, "Viking Press" , $autor1 );
$libro2 = new Libro(2, "El resplandor", 1977, "Viking Press" , $autor1 );
$libro3 = new Libro(3, "Carrie", 1974, "Doubleday" , $autor1 );
$libro4 = new Libro(4, "El imperio final", 2006, "NOVA" , $autor2 );
$libro5 = new Libro(5, "Elantris", 2005, "Tor Books" , $autor2 );

$coleccionLibros = [$libro1, $libro2, $libro3];
$coleccionLibros2 = [$libro4, $libro2, $libro5];
for ($i=0; $i<3; $i++){
    echo $coleccionLibros[$i]->__toString();
    $rta = $coleccionLibros[$i]->perteneceEditorial("Doubleday")? "Si" : "No";
    echo "Pertenece a la editorial DoubleDay?: " . $rta . "\n";
    echo "Años desde edicion: " . $coleccionLibros[$i]->aniosDesdeEdicion() . "\n";
    $rta = iguales($coleccionLibros[$i], $coleccionLibros2)? "Si" : "No";
    echo "Esta en la otra coleccion?: " . $rta . "\n";
    echo "____________________________________\n";
}
echo "Libros de Viking Press: ";
print_r(libroDeEditoriales($coleccionLibros, "Viking Press"));