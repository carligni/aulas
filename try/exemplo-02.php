<?php

function trataNome($name)
{
    if (!$name):
        throw new Exception("Tem que providenciar um nome");
    endif;

    echo ucfirst($name) . "<br>";
}

try {
    
    trataNome("John");
    trataNome("");

} catch (Exception $e) {

    echo "<h1>Fuck You</h1>" . $e->getMessage() . "<br>";

} finally {

    echo "Executou o try";

}

?>