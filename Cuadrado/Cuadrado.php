<?php
/**
 *      A---------B
 *      |         |
 *      |         |
 *      |         |
 *      C---------D
 */
class Cuadrado{
    private $verticeA;
    private $verticeB;
    private $verticeC;
    private $verticeD;

    //Los parametros son arreglos asociativos de la forma ["x" => x, "y" => y]
    public function __construct($a, $b, $c, $d)
    {
        $this->verticeA = $a;
        $this->verticeB = $b;
        $this->verticeC = $c;
        $this->verticeD = $d;
    }

    //OBSERVADORES
    public function getVerticeA(){
        return $this->verticeA;
    }
    public function getVerticeB(){
        return $this->verticeB;
    }
    public function getVerticeC(){
        return $this->verticeC;
    }
    public function getVerticeD(){
        return $this->verticeD;
    }
    //MODIFICADORES
    public function setVerticeA($x){
        $this->verticeA = $x;
    }
    public function setVerticeB($x){
        $this->verticeB = $x;
    }
    public function setVerticeC($x){
        $this->verticeC = $x;
    }
    public function setVerticeD($x){
        $this->verticeD = $x;
    }
    //

    /**
     * Funcion que retorna el area de un cuadrado.
     * El area de un cuadrado esta dado por lado * lado, la distancia de un lado es la resta de las posiciones en x de 2 vertices.
     * @return int
     */
    public function area(){
        $lado = $this->lado();
        return $lado*$lado;
    }

    /**
     * Calcula cuanto mide un lado (al ser un cuadrado todos los lados son iguales)
     */
    private function lado(){
        return abs($this->getVerticeA()["x"]- $this->getVerticeB()["x"]);
    }
    /**
     * Recibe por parametro un punto y desplaza el cuadrado en el plano desde su punto mas inferior izquierdo
     * @param Array $punto
     */
    public function desplazar($punto){
        $lado = $this->lado();
        //El punto mas inferior izquierdo es c
        $this->setVerticeC(["x"=>$punto["x"], "y"=> $punto["y"]]);
        //Muevo los demas puntos
        $this->setVerticeA(["x"=>$this->getVerticeC()["x"],
                            "y" => abs($this->getVerticeC()["y"]+$lado)]);
        $this->setVerticeB(["x"=>$this->getVerticeC()["x"]+$lado,
                            "y" => abs($this->getVerticeC()["y"]+$lado)]);
        $this->setVerticeD(["x"=>$this->getVerticeC()["x"]+$lado,
                            "y" => abs($this->getVerticeC()["y"])]);
    }                    
    /**
     * Recive el tamaño que debe aumentar el cuadrado
     * @param int $aumento
     */
    public function aumentarTamanio($aumento){
        //al punto A le aumento solo "y"
        $this->verticeA["x"]+=$aumento;
        //al punto B le aumento "x" e "y"
        $this->verticeB["x"]+=$aumento;
        $this->verticeB["y"]+=$aumento;
        //al punto D le aumento "x"
        $this->verticeD["x"]+=$aumento;
    }
    public function __toString()
    {
        return " 
        A---------B    Puntos:
        |         |     (". $this->getVerticeA()["x"].",".$this->getVerticeA()["y"].")
        |         |     (". $this->getVerticeB()["x"].",".$this->getVerticeB()["y"].")
        |         |     (". $this->getVerticeC()["x"].",".$this->getVerticeC()["y"].")
        C---------D     (". $this->getVerticeD()["x"].",".$this->getVerticeD()["y"].")";
    }
}