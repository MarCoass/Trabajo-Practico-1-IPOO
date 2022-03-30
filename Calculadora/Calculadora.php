<?php

class Calculadora
{

    //ATRIBUTOS
    private $valor_a;
    private $valor_b;

    //FUNCION CONSTRUCTORA
    public function __construct($a, $b)
    {
        $this->valor_a = $a;
        $this->valor_b = $b;
    }

    //FUNCIONES DE ACCESO
    public function getValorA()
    {
        return $this->valor_a;
    }
    public function getValorB()
    {
        return $this->valor_b;
    }


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
        return $this->getValorA() + $this->getValorB();
    }

    public function resta()
    {
        return $this->getValorA() - $this->getValorB();
    }

    public function multiplicacion()
    {
        return $this->getValorA() * $this->getValorB();
    }

    public function division()
    {
        return $this->getValorA() / $this->getValorB();
    }

    public function __toString()
    {
        return "Primer termino: " . $this->getValorA() .
            "\nSegundo termino: " . $this->getValorB() .
            "\nSuma: " . $this->suma() .
            "\nResta: " . $this->resta() .
            "\nMultiplicacion: " . $this->multiplicacion() .
            "\nDivision: " . $this->division();
    }
}
