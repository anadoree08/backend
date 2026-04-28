<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPTO123</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <?php
        $empresa = "Empresa Da Ana";
        $ano = 2010;
        $funcionarios = 25;
        $empresaAtiva = true;
        $faturamentoAnual = 1500000.50;    
        $funcionariaDestaque = "Alice Ortega";
        $piorFuncionario = "Sofia ";


        echo "<h1>$empresa</h1>";
        echo "<p><strong>Ano de fundação:</strong> $ano</p>";
        echo "<p><strong>Funcionários:</strong> $funcionarios</p>";
        echo "<p><strong>Empresa ativa:</strong> " . ($empresaAtiva ? "Sim" : "Não") . "</p>";
        echo "<p><strong>Faturamento anual:</strong> $faturamentoAnual</p>";
        echo "<p><strong>Funcionária destaque:</strong> $funcionariaDestaque</p>";
        echo "<p><strong>Pior funcionário:</strong> $piorFuncionario</p>";
        ?>

</body>
</html>