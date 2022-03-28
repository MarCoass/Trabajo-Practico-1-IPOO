<?php

class Fecha
{
    private $dia;
    private $mes;
    private $anio;

    //CONSTRUCTOR
    public function __construct($d, $m, $a)
    { //Agregarle validacion
        $this->dia = $d;
        $this->mes = $m;
        $this->anio = $a;
    }
    //OBSERVADORES
    public function getDia()
    {
        return $this->dia;
    }
    public function getMes()
    {
        return $this->mes;
    }
    public function getAnio()
    {
        return $this->anio;
    }
    //MODIFICADORES
    public function setDia($d)
    {
        $this->dia = $d;
    }
    public function setMes($m)
    {
        $this->mes = $m;
    }
    public function setAnio($a)
    {
        $this->anio = $a;
    }

    //DE CLASE
    private function esBisiesto($a)
    {
        if (($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0) {
            $esBisiesto = true;
        } else {
            $esBisiesto = false;
        }
        return $esBisiesto;
    }

    private function mes31Dias($m)
    {
        $tiene31Dias = true;
        if ($m == 4 || $m == 7 || $m == 9 || $m == 11 || $m == 2) {
            $tiene31Dias = false;
        }
        return $tiene31Dias;
    }

    public function incrementa($dias){
        $nuevaFecha = new Fecha($this->getDia(), $this->getMes(), $this->getAnio());
        
        for($i = 1; $i <= $dias; $i++){
            $nuevaFecha->incrementaUnDia();
        }
        return $nuevaFecha;
    }

    public function incrementaUnDia(){
        if($this-> getDia()+1 > 31 && $this->mes31Dias($this->getMes()) || ($this->dia+1 > 30 && !$this->mes31Dias($this->getMes()))){
            $this->dia = 1;
            $this->incrementaUnMes();
        }else {
            $this->dia++;
        }
    }
    public function incrementaUnMes(){
        if($this->getMes() + 1 > 12){
            $this-> setMes($this->getMes()+1);
            $this-> setAnio($this->getAnio()+1);
        } else {
            $this->setMes($this->getMes()+1);
        }
    }

    public function fechaExtendida()
    {

        switch ($this->getMes()) {
            case 1:
                $textoMes = "Enero";
                break;
            case 2:
                $textoMes = "Febrero";
                break;
            case 3:
                $textoMes = "Marzo";
                break;
            case 4:
                $textoMes = "Abril";
                break;
            case 5:
                $textoMes = "Mayo";
                break;
            case 6:
                $textoMes = "Junio";
                break;
            case 7:
                $textoMes = "Julio";
                break;
            case 8:
                $textoMes = "Agosto";
                break;
            case 9:
                $textoMes = "Septiembre";
                break;
            case 10:
                $textoMes = "Octubre";
                break;
            case 11:
                $textoMes = "Noviembre";
                break;
            case 12:
                $textoMes = "Diciembre";
                break;
        }
        return $this->getDia() . " de " . $textoMes . " del " . $this->getAnio();
    }

    public function fechaAbreviada()
    {
        return $this->getDia() . "/" . $this->getMes() . "/" . $this->getAnio();
    }
}
