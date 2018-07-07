<?php
function incluirClasses($classe)
{
    if (file_exists($classe . ".php") === true):
        require_once($classe . ".php");
    endif;
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($classe) {
    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $classe . ".php") === true):
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $classe . ".php");
    endif;

});

$carro = new Opel();
$carro->acelerar(85);

?>