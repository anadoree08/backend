<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"] ?? 0;

    $inicio = date('m-d-Y', strtotime('-7 days'));
    $fim = date('m-d-Y');

    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$fim'&\$top=1&\$format=json&\$select=cotacaoCompra";

    $dados = json_decode(file_get_contents($url), true);

    $dolar = $dados["value"][0]["cotacaoCompra"];

    $resultado = $valor / $dolar;

    echo "<h2>Resultado da Conversão:</h2>";

    $padrao_brasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $padrao_eua = numfmt_create("en_US", NumberFormatter::CURRENCY);

    echo "<p><strong>Valor em Reais:</strong> " . 
    numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";

    echo "<p><strong>Valor em Dólares:</strong> " . 
    numfmt_format_currency($padrao_eua, $resultado, "USD") . "</p>";

} else {

    echo "<p>Por favor, envie um valor para conversão.</p>";

}

?>

<a href="index.php">Voltar</a>

</div>

</body>
</html>