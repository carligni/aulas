<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Carlos Silva");
$cad->setEmail("carlos.silva@mail.pt");
$cad->setSenha("123456");

echo $cad;

$cad->registarVenda();

?>