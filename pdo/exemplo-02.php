<?php

$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>