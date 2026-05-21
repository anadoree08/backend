<?php 
setcookie("empresa", "XPTO123", time() + 3600); // Define um cookie que expira em 1 hora
echo "Cookie Criado <br>";

var_dump($_COOKIE); // Exibe os cookies atuais
?>