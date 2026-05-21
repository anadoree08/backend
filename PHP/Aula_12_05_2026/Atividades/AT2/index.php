<?php
session_start();

// salva dados na sessão
if ($_POST) {

    $_SESSION["nome"] = $_POST["nome"]; // Salva o nome na sessão
    $_SESSION["email"] = $_POST["email"]; // Salva o email na sessão
    $_SESSION["idade"] = $_POST["idade"]; // Salva a idade na sessão

    // COOKIE (salva nome por 1 hora)
    setcookie("ultimo_nome", $_POST["nome"], time() + 3600);
}

// pega cookie
$ultimoNome = $_COOKIE["ultimo_nome"] ?? "nenhum";

$css = "style.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Sistema</title>

    <link rel="stylesheet" href="<?php echo $css; ?>">
</head>
//aqui tem o css embutido, para estilização da página.
<style>
body { /* Estilização do corpo da página */
    font-family: Arial, sans-serif;
    background-color: #f4f6f9;
    margin: 0;
    padding: 0;
}

header { /* Estilização do cabeçalho */
    background-color: #4f46e5;
    color: white;
    text-align: center;
    padding: 20px;
}

.card { /* Estilização do cartão de formulário */
    background-color: white;
    width: 400px;
    margin: 40px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
}

h1 { /* Estilização do título principal */
    text-align: center;
    color: #333;
}

label { /* Estilização dos rótulos dos campos */
    display: block;
    margin-top: 12px;
    font-weight: bold;
    color: #444;
}

input { /* Estilização dos campos de entrada */
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}

input[type="submit"] { /* Estilização do botão de envio */
    margin-top: 20px;
    background-color: #4f46e5;
    color: white;
    border: none;
    cursor: pointer;
}


.resultado { /* Estilização da seção de resultados */
    margin-top: 20px;
}

.resultado p { /* Estilização dos parágrafos de resultado */
    margin-bottom: 10px;
    font-size: 14px;
}

table { /* Estilização da tabela de resultados */
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th { /* Estilização dos cabeçalhos da tabela */
    background-color: #4f46e5;
    color: white;
    padding: 10px;
}

td { /* Estilização das células da tabela */
    border: 1px solid #ddd;
}

tr:nth-child(even) { /* Estilização de linhas pares da tabela */
    background-color: #f2f2f2;
}

footer { /* Estilização do rodapé */
    text-align: center;
    padding: 15px;
    background-color: #4f46e5;
    color: white;
    margin-top: 40px;
}
</style>

<body>

//aqui tem o código PHP para exibir os dados do formulário e do cookie, além de incluir o header e footer.
<?php require "header.php"; ?>

<div class="card">

    <h1>Cadastro de Usuário</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome">

        <label>E-mail:</label>
        <input type="email" name="email">

        <label>Idade:</label>
        <input type="number" name="idade">

        <input type="submit" value="Enviar">

    </form>
    <!-- Exibição dos resultados do formulário e do cookie -->
    <div class="resultado">

        <p><strong>Último nome salvo no cookie:</strong> <?php echo $ultimoNome; ?></p>
        <!-- Exibição dos dados salvos na sessão -->
        <table>

    <tr>
        <th>Campo</th>
        <th>Resultado</th>
    </tr>

    <tr>
        <td>Nome</td>
        <td><?php echo $_SESSION["nome"] ?? ""; ?></td>
    </tr>

    <tr>
        <td>E-mail</td>
        <td><?php echo $_SESSION["email"] ?? ""; ?></td>
    </tr>

    <tr>
        <td>Idade</td>
        <td><?php echo $_SESSION["idade"] ?? ""; ?></td>
    </tr>

    <tr>
        <td>Último nome (Cookie)</td>
        <td><?php echo $ultimoNome; ?></td>
    </tr>

</table>

    </div>

</div>
<br>
<br>
<br>
<?php require "footer.php"; ?>

</body>
</html>