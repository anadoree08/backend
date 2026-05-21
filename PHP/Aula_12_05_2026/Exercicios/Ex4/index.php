<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form03</title>
</head>
<body>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>
        <label >E-mail: </label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php 
    function exibirCampo($label, $valor) {
        echo " $label : $valor <br>";
    } 
    /*if (isset($_POST["nome"], $_POST["email"])) {
        exibirCampo("Nome", $_POST["nome"]);
        exibirCampo("E-mail", $_POST["email"]);
    } */
   exibirCampo("Nome", $_POST["nome"] ?? "");
    exibirCampo("E-mail", $_POST["email"] ?? "");
    ?>
</body>
</html>