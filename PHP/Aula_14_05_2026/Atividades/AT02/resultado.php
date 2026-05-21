<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            padding: 20px;
        }

        .container{
            background-color: white;
            width: 500px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1{
            color: #1e3a8a;
            margin-bottom: 30px;
            font-size: 32px;
        }

        .numeros-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .numero-card{
            width: 75px;
            height: 75px;
            background-color: #2563eb;
            color: white;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(37,99,235,0.3);
            transition: 0.3s;
        }

        .numero-card:hover{
            transform: translateY(-5px) scale(1.05);
        }

    </style>

</head>
<body>

    <div class="container">

        <h1>Números Sorteados</h1>

        <?php
    
        $numerosSorteados = []; // Array para armazenar os números sorteados

        for ($i = 0; $i < 6; $i++) { // Gerar 6 números aleatórios entre 1 e 60

            $numerosSorteados[] = mt_rand(1, 60); // mt_rand é uma função mais rápida e segura para gerar números aleatórios

        }

        ?>

        <div class="numeros-container">

            <?php

            foreach ($numerosSorteados as $numero) { // Exibir cada número sorteado em um card

                echo "<div class='numero-card'>$numero</div>"; // Exibe o número dentro do card

            }

            ?>

        </div>

    </div>

</body>
</html>