<?php
$funcionarios = 120;

if($funcionarios < 50) {
    echo "Empresa de pequeno porte";
}
elseif($funcionarios <100) {
    echo "Empresa de médio porte";
}
else{
    echo "Empresa de grande porte";
}
?>