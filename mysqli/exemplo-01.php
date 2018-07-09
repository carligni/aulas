<?php

$conn = new mysqli("localhost", "root", "wooten", "dbphp7");

if ($conn->connect_error):
    echo "Error: " . $conn->connect_error;
    exit;
endif;

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "user2";
$pass = "45678";

$stmt->execute();

?>