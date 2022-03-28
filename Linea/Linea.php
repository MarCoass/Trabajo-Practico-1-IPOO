<?php

class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;
    //(pA, pB) y (pC, pD) son 2 puntos por los que pasa la linea
    
    public function __construct($a, $b, $c, $d)
    {
        $this->pA=$a;
        $this->pB=$b;
        $this->pC=$c;
        $this->pD=$d;
    }

    public function getA(){
        return $this->pA;
    }
    public function getB(){
        return $this->pB;
    }
    public function getC(){
        return $this->pC;
    }
    public function getD(){
        return $this->pD;
    }

    public function setA($x){
        $this->pA=$x;
    }
    public function setB($x){
        $this->pB=$x;
    }
    public function setC($x){
        $this->pC=$x;
    }
    public function setD($x){
        $this->pD=$x;
    }

    //
    /**
     * Funcion que mueve la linea a la derecha (le suma a los valores de x)
     * @param int $x
     */
    public function mueveDerecha($x){
        $this->setA($this->getA()+$x);
        $this->setC($this->getC()+$x);
    }
    /**
     * Funcion que mueve la linea a la izquierda 
     * @param int $x
     */
    public function mueveIzquierda($x){
        $this->setA($this->getA()-$x);
        $this->setC($this->getC()-$x);
    }
    /**
     * Funcion que mueve la linea hacia arriba (le suma a los valores de y)
     * @param int $x
     */
    public function mueveArriba($x){
        $this->setB($this->getB()+$x);
        $this->setD($this->getD()+$x);
    }
    /**
     * Funcion que mueve la linea hacia abajo
     * @param int $x
     */
    public function mueveAbajo($x){
        $this->setB($this->getB()-$x);
        $this->setD($this->getD()-$x);
    }


    public function __toString()
    {
        return "(". $this->getA() . ",". $this->getB() . ") , (" . $this->getC() . "," . $this->getD() . ")";
    }
}