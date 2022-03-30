<?php
class CuentaBancaria{
    private $numCuenta;
    private $dni;
    private $saldoActual;
    private $interesAnual;

    //FUNCION CONSTRUCTORA
    public function __construct($num, $dni, $saldo, $interes)
    {
        $this->numCuenta=$num;
        $this->dni=$dni;
        $this->saldoActual=$saldo;
        $this->interesAnual=$interes;
    }

    //FUNCIONES DE ACCESO
    public function getNumeroCuenta(){
        return $this->numCuenta;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setNumeroCuenta($x){
        $this->numCuenta=$x;
    }
    public function setDni($x){
        $this->dni=$x;
    }
    public function setSaldoActual($x){
        $this->saldoActual=$x;
    }
    public function setInteresAnual($x){
        $this->interesAnual=$x;
    }

    /**
     * Actualiza el saldo de la cuenta aplicándole el interés diario (interés anual 
     * dividido entre 365 aplicado al saldo actual).
     */
    public function actualizarSaldo(){
        $interesDiario = $this->getInteresAnual()/365;
        $interes = ($interesDiario * $this->getSaldoActual())/100;
        $this->setSaldoActual($this->getSaldoActual()+$interes);
    }
    
    /**
     * Deposita una cantidad ingresada por parametro.
     * @param int $cant
     */
    public function depositar($cant){
        $this->setSaldoActual($this->getSaldoActual()+$cant);
    }

    /**
     * Retira una cantidad ingresada por parametro solo si la cantidad en la cuenta es suficiente. En caso de
     * no poder retirar, muestra un mensaje de error
     * @param int $cant
     */
    public function retirar($cant){
        $cantidadActualizada = $this->getSaldoActual()-$cant;
        if($cantidadActualizada>0){
            $this->setSaldoActual($cantidadActualizada);
        } else {
            echo "No hay saldo suficiente.\n";
        }
    }

    /**
     * Retorna un string con los atributos del objeto.
     */
    public function __toString()
    {
        return "Numero de cuenta: " . $this->getNumeroCuenta().
        "\nDNI de cliente: " . $this->getDni().
        "\nSaldo actual: " . $this->getSaldoActual().
        "\nInteres anual: " . $this->getInteresAnual();
    }
}