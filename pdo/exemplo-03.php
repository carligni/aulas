<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "wooten");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:login, :password)");

$login = "jose";
$password = "1234567890";

// $stmt->execute(array(":login" => $login, ":password" => $password));

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

echo "Inserido com sucesso!";

?>