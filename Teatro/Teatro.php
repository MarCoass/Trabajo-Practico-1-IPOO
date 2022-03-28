<?php
class Teatro{
    private $nombre;
    private $direccion;
    private $funciones;//Arrat asociativo ["nombre", "precio"]

    public function __construct($nombre, $direccion, $funciones)
    {
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->funciones=$funciones;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFunciones(){
        return $this->funciones;
    }

    public function setNombre($x){
        $this->nombre = $x;
    }
    public function setDireccion($x){
        $this->direccion = $x;
    }
    public function setFunciones($x){
        $this->funciones = $x;
    }

    public function __toString()
    {
        return "Nombre del teatro: " . $this->getNombre() .
        "\nDireccion del teatro: " . $this->getDireccion().
        "\nFunciones:\n ";
    }
}