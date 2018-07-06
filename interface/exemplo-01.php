<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function travar($velocidade);
    public function trocarMudanca($mudanca);

}

class Renault implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "Acelera até " . $velocidade . " km/h<br>";
    }

    public function travar($velocidade)
    {
        echo "Trava a " . $velocidade . " km/h<br>";
    }

    public function trocarMudanca($mudanca)
    {
        echo "Troca mudança a " . $mudanca . " km/h<br>";
    }


}

$clio = new Renault();

$clio->acelerar(100);
$clio->travar(100);
$clio->trocarMudanca(30);
?>