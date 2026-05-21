<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>



<?php
require('config/conexao.php');

$sql = "SELECT * FROM produtos";
$stmt = $pdo->query($sql);

echo "<h2>Lista de Produtos</h2>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>";
    echo "ID: " . $row['id'] . " | ";
    echo "Nome: " . $row['nome'] . " | ";
    echo "Preço: " . $row['preco'] . " | ";
    echo "Estoque: " . $row['estoque'] . " | ";
    echo "Fabricante: " . $row['fabricante'] . " | ";
    echo "Dose: " . $row['dose'];
    echo "</p>";
}
?>

<a href="cadastro.php">Cadastro</a>
<a href="excluir.php">exclusao</a>

</body>
</html>