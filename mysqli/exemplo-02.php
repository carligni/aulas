<?php

$conn = new mysqli("localhost", "root", "wooten", "dbphp7");

if ($conn->connect_error):
    echo "Error: " . $conn->connect_error;
    exit;
endif;

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()):
    array_push($data, $row);
    // var_dump($row);
endwhile;

echo json_encode($data);

?>