<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Reais para Dólar</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h1>Conversor de Moeda</h1>

        <form action="converter.php" method="POST">

            <label>Digite o valor em reais:</label>

            <input 
                type="number" name="valor" step="0.01" placeholder="Ex: 100.00" required >

            <button type="submit">Converter</button>

        </form>

    </div>

</body>
</html>