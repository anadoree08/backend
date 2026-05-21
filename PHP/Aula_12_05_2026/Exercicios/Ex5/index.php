<?php 
session_start();

$_SESSION["usuario"] = "Ana Dore";

echo "Usuario armazenado na sessão: <br><pre>";

var_dump($_SESSION);

echo "</pre>";  
?>  