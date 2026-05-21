<?php

// Função 1 - que retorna o nome da empresa
function nomeEmpresa($nome) { // parametro de entrada
    return "Empresa: " . $nome;
}

// Função 2 - que mostra mensagem de boas-vindas
function mensagemBoasVindas($nomeFuncionario) { // parametro de entrada
    echo "Bem-vindo(a), $nomeFuncionario!<br>";
}

// Função 3 - que calcula tempo de empresa
function tempoEmpresa($anoFundacao, $anoAtual) { // parametros de entrada
    $tempo = $anoAtual - $anoFundacao;
    return "Tempo de empresa: $tempo anos"; // retorno do resultado
}

echo nomeEmpresa("Tech Solutions");
echo "<br><br>";

// função reutilizada
mensagemBoasVindas("Ana");
mensagemBoasVindas("Carlos");

echo "<br>";

// função reutilizada 
echo tempoEmpresa(2018, 2026);
echo "<br>";
echo tempoEmpresa(2010, 2026);

?>