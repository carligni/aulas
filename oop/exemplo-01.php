<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor():float
    {
        return $this->motor;
    }

    public function setMoTor($motor)
    {
        $this->motor = $motor;
    }
    public function getAno():int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            'modelo'    => $this->getModelo(),
            'motor'     => $this->getMotor(),
            'ano'       => $this->getAno()
        );
    }

}

$renault = new Carro();
$renault->setModelo("Clio 1.5 DCI");
$renault->setMotor("1.5");
$renault->setAno("2015");

var_dump($renault->exibir());
?>