<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $salario = $_POST["salario"];

    $salarioMinimo = 1518;

    $quantidade = floor($salario / $salarioMinimo);

    $sobra = $salario % $salarioMinimo;

    echo "<h2>Resultado</h2>";

    echo "<p>Salário informado: R$ " . number_format($salario, 2, ',', '.') . "</p>";

    echo "<p>Quantidade de salários mínimos: $quantidade</p>";

    echo "<p>Sobra: R$ " . number_format($sobra, 2, ',', '.') . "</p>";

}

?>

<a href="index.php">Voltar</a>

</div>

</body>
</html>