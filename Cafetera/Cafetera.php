<?php
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($maxima, $actual)
    {
        $this->capacidadMaxima = $maxima;
        $this->cantidadActual = $actual;
    }

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }
    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function setCapacidadMaxima($x){
        $this->capacidadMaxima = $x;
    }
    public function setCantidadActual($x){
        $this->cantidadActual=$x;
    }

    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }
    
    public function servirTaza($cantidad){
        if($this->getCantidadActual()-$cantidad < 0){
            echo "No hay cafe suficiente.\n";
        }else {
            $this->setCantidadActual($this->getCantidadActual()-$cantidad);
        }
    }
    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }
    public function agregarCafe($cantidad){
        $this->setCantidadActual($this->getCantidadActual()+$cantidad);
        if($this->getCantidadActual()>$this->getCapacidadMaxima()){
            //Si se sobrepasa la capacidad, queda llena la cafetera
            $this->setCantidadActual($this->getCapacidadMaxima());
        }
    }
    public function __toString()
    {
        return "Capacidad maxima: " . $this->getCapacidadMaxima() . "\nCantidad Actual: " . $this->getCantidadActual() . "\n";
    }
}