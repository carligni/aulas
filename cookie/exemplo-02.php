<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])):
    
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $obj->empresa;
    /* unset($_COOKIE["NOME_DO_COOKIE"]);
    // Se tiver path tenho que incluir
    setcookie("NOME_DO_COOKIE", "", time() - 3600); */

endif;



?>