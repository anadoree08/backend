<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salários Mínimos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Calculadora de Salário</h1>

    <form action="resultado.php" method="post">

        <label>Digite o salário:</label>
        <input type="number" step="0.01" name="salario" required>

        <button type="submit">Calcular</button>

    </form>

</div>

</body>
</html>