<?php

$empresa = "XPTO123";
$funcionarios = 40;
$faturamento = 10000;

// Outro valor para comparação
$funcionarios2 = 25;
$faturamento2 = 7500;

// 1º cálculo: 
$total = $funcionarios + $funcionarios2;

// 2º cálculo: 
$diferenca = $faturamento - $faturamento2;

// Comparação simples
$maisFuncionarios = $funcionarios > $funcionarios2;

// Saída
echo "Empresa: " . $empresa . "<br>";
echo "Total de funcionários: " . $total . "<br>";
echo "Diferença de faturamento: " . $diferenca . "<br>";

echo "Tem mais funcionários? " . ($maisFuncionarios ? "Sim" : "Não");

?>