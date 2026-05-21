<?php
$funcionarios = 40;

$mediaEmpresa = $funcionarios >= 39;

//echo "Empresa de médio porte?";
//echo $mediaEmpresa;

echo "A empesa é de: " . ($mediaEmpresa ? "Médio porte" : "Pequeno porte");
?>