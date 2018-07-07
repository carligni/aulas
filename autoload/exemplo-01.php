<?php
function __autoload($classe)
{
    require_once("$classe.php");
}

$carro = new Opel();
$carro->acelerar(85);

?>