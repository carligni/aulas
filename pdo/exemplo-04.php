<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :login, dessenha = :password WHERE idusuario = :id");

$login = "carlos";
$password = "jkrtrtrt";
$id = 3;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Alterado com sucesso!";

?>