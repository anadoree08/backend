<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form02</title>
</head>
<body>
    <form method="POST">
        <label>E-mail:</label>
        <input type="email" name="email" id="email" placeholder="email@dominio.com">
        <label >Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo "E-mail informado: $email";
    echo "<br>";
    echo "login ok";
    ?>
</body>
</html>