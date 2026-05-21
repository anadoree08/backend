<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome">
        <label>E-mail:</label>
        <input type="email" name="email" id="email">
        <label>Mensagem:</label>
        <input type="text" name="msg" id="msg"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <h2>Dados Recebidos:</h2>
    <hr>
    <?php 
    //Declarando  as variáveis
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $msg = $_POST["msg"] ?? "";

    //Exibindo informações
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Mensagem: $msg <br>";

    ?>
</body>
</html>