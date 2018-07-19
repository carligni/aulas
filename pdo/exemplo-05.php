<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :id");

$id = 2;

$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Eliminado com sucesso!";

?>