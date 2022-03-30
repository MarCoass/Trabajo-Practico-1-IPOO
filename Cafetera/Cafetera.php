<?php
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    //FUNCION CONSTRUCTORA
    public function __construct($maxima, $actual)
    {
        $this->capacidadMaxima = $maxima;
        $this->cantidadActual = $actual;
    }

    //FUNCIONES DE ACCESO
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
    
    /**
     * Llena la cafetera (setea la cantidad actual igual a la capacidad maxima)
     */
    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }
    
    /**
     * Dada una cantidad de cafe sirve una taza, es decir, resta de la cantidad actual la cantidad a servir
     * solo en caso de que el cafe alcance. En caso de que el cafe no alcance, muestra un mensaje de error.
     * @param int $cantidad
     */
    public function servirTaza($cantidad){
        if($this->getCantidadActual()-$cantidad < 0){
            echo "No hay cafe suficiente.\n";
        }else {
            $this->setCantidadActual($this->getCantidadActual()-$cantidad);
        }
    }

    /**
     * Setea la cantidad de cafe en 0.
     */
    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }

    /**
     * Agrega la cantidad de cafe indicada por parametro. Si se sobrepasa la capacidad queda llena la cafetera.
     * @param int $cantidad
     */
    public function agregarCafe($cantidad){
        $this->setCantidadActual($this->getCantidadActual()+$cantidad);
        if($this->getCantidadActual()>$this->getCapacidadMaxima()){
            //Si se sobrepasa la capacidad, queda llena la cafetera
            $this->setCantidadActual($this->getCapacidadMaxima());
        }
    }

    /**
     * Retorna un string con los atributos del objeto.
     */
    public function __toString()
    {
        return "Capacidad maxima: " . $this->getCapacidadMaxima() . "\nCantidad Actual: " . $this->getCantidadActual() . "\n";
    }
}