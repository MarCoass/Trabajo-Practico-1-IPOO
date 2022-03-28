<?php

class Login{
    private $nombreUsuario;
    private $contrasenia;
    private $pista;
    private $ultimasContrasenias;

    //CONSTRUCTOR
    public function __construct($nombre, $contrasenia, $pista)
    {
        $this->nombreUsuario = $nombre;
        $this->contrasenia = $contrasenia;
        $this->pista = $pista;
        $this->ultimasContrasenias = [];
        array_push($this->ultimasContrasenias, $contrasenia);
    }

    //OBSERVADORES
    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function getPista(){
        return $this->pista;
    }
    public function getUltimasContrasenias(){
        return $this->ultimasContrasenias;
    }

    //MODIFICADORES
    public function setNombreUsuario($nombre){
        $this->nombreUsuario = $nombre;
    }
    public function setContrasenia($contrasenia){
        $this->contrasenia = $contrasenia;
    }
    public function setPista($pista){
        $this->pista = $pista;
    }
    public function setUltimasContrasenias($ultimas){
        $this->ultimasContrasenias = $ultimas;
    }
    //DE CLASE

    public function nuevaContrasenia($nueva){
        if($this->verificarContrasenia($nueva)){
            
            $this->setContrasenia($nueva);
            $this->actualizarUltimasContrasenias($this->getContrasenia());
        } else {
            echo "La contraseña ingresada se ha usado hace poco.
            ";
        }
    }

    private function verificarContrasenia($c){
        $tamañoArreglo = sizeof($this->getUltimasContrasenias());
        $i = 0;
        $noCoincide = true;
        while($i<$tamañoArreglo && $noCoincide){
            if($this->getUltimasContrasenias()[$i] == $c){
                $noCoincide = false;
            }
            $i++;
        }
        return $noCoincide;
    }
    private function actualizarUltimasContrasenias($c){
        $tamañoArreglo = sizeof($this->getUltimasContrasenias());
        if($tamañoArreglo == 4){
            array_shift($this->getUltimasContrasenias());
        }
        array_push($this->getUltimasContrasenias(), $c);
    }
    public function toString()
    {
        echo "Nombre de Usuario: " . $this->getNombreUsuario() . "
        Pista: " . $this->getPista() . "
        Contraseña: " . $this->getContrasenia() . " 
        Ultimas contraseñas: ";
        print_r($this -> getUltimasContrasenias());
    }
}