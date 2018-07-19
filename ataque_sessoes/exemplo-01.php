<?php

session_start();

// Depois do login reiniciar id de sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id(); 

?>