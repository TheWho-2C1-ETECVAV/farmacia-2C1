<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require('config/conexao.php');

$sql = "SELECT * FROM produtos";
$stmt = $pdo->query($sql);

echo "<h2>Produtos</h2>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>";
    echo "ID: " . $row['id'] . " | ";
    echo "Nome: " . $row['nome'] . " | ";
    echo "Preço: " . $row['preco'] . " | ";

    // botão excluir
    echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";

    echo "</p>";
}
?>




</body>
</html>