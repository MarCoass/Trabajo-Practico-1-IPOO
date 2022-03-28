<?php

class Reloj
{
    private $horas;
    private $minutos;
    private $segundos;

    //CONSTRUCTOR
    public function __construct($h, $m, $s)
    {
        if (($h < 24 && $m < 24 && $s < 24) && is_numeric($h) && is_numeric($m) && is_numeric($s)) {
            $this->horas = $h;
            $this->minutos = $m;
            $this->segundos = $s;
        } else {
            throw new ErrorException("Los valores ingresados no son validos.");
        }
    }
    //OBSERVADORES
    public function getHoras()
    {
        return $this->horas;
    }
    public function getMinutos()
    {
        return $this->minutos;
    }
    public function getSegundos()
    {
        return $this->segundos;
    }

    //MODIFICADORES
    public function setHoras($h)
    {
        $this->horas = $h;
    }
    public function setMinutos($m)
    {
        $this->minutos = $m;
    }
    public function setSegundos($s)
    {
        $this->segundos = $s;
    }

    //DE CLASE
    /**
     * Pone en 0 todos los atributos
     */
    public function puesta_a_cero()
    {
        $this->setSegundos(0);
        $this->setMinutos(0);
        $this->setHoras(0);
    }

    public function incremento()
    {
        $this->setSegundos($this->getSegundos()+1); 
        if($this->getSegundos()==60){
            $this->setSegundos(0);
            $this->setMinutos($this->getMinutos()+1);
            if($this->getMinutos() == 60){
                $this->setMinutos(0);
                $this->setHoras($this->getHoras()+1);
                if($this->getHoras() == 24){
                    $this->setHoras(0);
                }
            }
        }
    }


    /**
     * Retorna en formato hh:mm:ss
     * @return String
     */
    public function __toString()
    {
        $cadena = $this->auxFormatoHora($this->getHoras()) . ":" .
            $this->auxFormatoHora($this->getMinutos()) . ":" .
            $this->auxFormatoHora($this->getSegundos());
        return $cadena;
    }

    /**
     * Funcion auxiliar para toString: 
     * Si el numero ingresado es 0 retorna un string con doble 0, 
     * si es menor a 10 le agrega el 0 a la izquierda
     * y sino lo retorna tal cual
     * @param int $num
     * @return String
     */
    private function auxFormatoHora($num)
    {
        if ($num == 0) {
            $cadena = "00";
        } elseif ($num < 10) {
            $cadena = "0" . $num;
        } else {
            $cadena = (string) $num;
        }
        return $cadena;
    }
}
