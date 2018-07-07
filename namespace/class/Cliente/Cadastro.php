<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registarVenda()
    {
        echo "Registou uma venda para " . $this->getNome();
    }

}

?>