<?php

$nomeEmpresa = "Tech Solutions";
$tempoMercado = 6; // anos
$setor = "TI";
$funcionarios = 85;


// DECISÃO 1: PORTE DA EMPRESA


if ($funcionarios <= 20) {
    $porte = "Pequena empresa";
} elseif ($funcionarios <= 100) {
    $porte = "Média empresa";
} else {
    $porte = "Grande empresa";
}


// DECISÃO 2: STATUS DA EMPRESA

// baseado no tempo de mercado

if ($tempoMercado < 2) {
    $status = "Empresa iniciante";
} elseif ($tempoMercado <= 5) {
    $status = "Empresa em crescimento";
} else {
    $status = "Empresa consolidada";
}


// DECISÃO 3: SETOR (SWITCH)


switch ($setor) {
    case "TI":
        $descricaoSetor = "Tecnologia da Informação";
        break;

    case "RH":
        $descricaoSetor = "Recursos Humanos";
        break;

    case "Financeiro":
        $descricaoSetor = "Setor Financeiro";
        break;

    default:
        $descricaoSetor = "Setor não identificado";
        break;
}

