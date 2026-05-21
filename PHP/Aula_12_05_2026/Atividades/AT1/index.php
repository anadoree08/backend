<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tudo Sobre Você</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .card {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 12px;
            color: #444;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        input[type="submit"]:hover {
            background-color: #4338ca;
        }

        .resultado {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: #4f46e5;
            color: white;
            padding: 10px;
        }

        table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>Formulário</h1>

    <form method="post">

        <label>Nome:</label>
        <input type="text" name="nome" id="nome">

        <label>E-mail:</label>
        <input type="email" name="email" id="email">

        <label>Cargo Desejado:</label>
        <input type="text" name="cargo" id="cargo">

        <label>Área de Atuação:</label>
        <input type="text" name="area" id="area">

        <label>Disponibilidade de Horário:</label>
        <input type="text" name="horario" id="horario">

        <input type="submit" value="Enviar">

    </form>

    <div class="resultado">

        <table>
            <tr>
                <th>Campo</th>
                <th>Resultado</th>
            </tr>

            <tr>
                <td>Nome</td>
                <td><?php echo $_POST["nome"] ?? ""; ?></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td><?php echo $_POST["email"] ?? ""; ?></td>
            </tr>

            <tr>
                <td>Cargo Desejado</td>
                <td><?php echo $_POST["cargo"] ?? ""; ?></td>
            </tr>

            <tr>
                <td>Área de Atuação</td>
                <td><?php echo $_POST["area"] ?? ""; ?></td>
            </tr>

            <tr>
                <td>Disponibilidade</td>
                <td><?php echo $_POST["horario"] ?? ""; ?></td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>