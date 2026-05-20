<?php
$dsn = "mysql:host=localhost;dbname=farmacia;charset=utf8";
$usuario = "root";
$senha = "";

//conexão
try {
    $pdo = new PDO($dsn, $usuario, $senha);
} catch (PDOException $e)  {
    die("Eroo ao conectar: " . $e->getMessage());
}



?>