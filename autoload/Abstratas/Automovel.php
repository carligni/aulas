<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function travar($velocidade);
    public function trocarMudanca($mudanca);

}

abstract class Automovel implements Veiculo {

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

?>