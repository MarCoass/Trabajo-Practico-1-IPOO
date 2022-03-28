<?php

class Calculadora
{

    //ATRIBUTOS
    private $valor_a;
    private $valor_b;
    private $resultado;

    //CONSTRUCTOR
    public function __construct($a, $b)
    {
        $this->valor_a = $a;
        $this->valor_b = $b;
    }

    //OBSERVADORES
    public function getValorA()
    {
        return $this->valor_a;
    }
    public function getValorB()
    {
        return $this->valor_b;
    }
    public function getResultado()
    {
        return $this->resultado;
    }

    //MODIFICADORES
    public function setValorA($a)
    {
        $this->valor_a = $a;
    }
    public function setValorB($b)
    {
        $this->valor_b = $b;
    }
    

    //DE CLASE
    public function suma()
    {
        $this->resultado = $this->getValorA() + $this->getValorB();
    }

    public function resta()
    {
        $this->resultado = $this->getValorA() - $this->getValorB();
    }

    public function multiplicacion()
    {
        $this->resultado = $this->getValorA() * $this->getValorB();
    }

    public function division()
    {
        $this->resultado = $this->getValorA() / $this->getValorB();
    }

    public function __toString()
    {
        return "Resultado: " . $this->getResultado();
    }
}
