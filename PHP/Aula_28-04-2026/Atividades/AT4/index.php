<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
    <style>
        body {
            font-family: Arial;
        }
        section {
            border: 2px solid #333;
            padding: 10px;
            width: 300px;
        }
    </style>
</head>
<body>

<section>

<?php
// Quantidade de funcionários
$totalFuncionarios = 10;

// Loop para listar funcionários
for ($i = 1; $i <= $totalFuncionarios; $i++) {

    // Lógica extra com IF
    if ($i % 2 == 0) {
        echo "Funcionário $i - Status: Ativo (par)<br>";
    } else {
        echo "Funcionário $i - Status: Em análise (ímpar)<br>";
    }
}
?>

</section>

</body>
</html>