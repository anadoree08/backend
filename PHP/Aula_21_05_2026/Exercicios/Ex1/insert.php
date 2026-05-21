<?php
require_once 'connect_postgres.php';

$sql = "INSERT INTO alunos (
nome,
sobrenome, 
data_nascimento,
turma)
VALUES (:nome,
:sobrenome,
:data_nascimento,
:turma)";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Joao");
$stmt->bindValue(":sobrenomne", "Silva");
$stmt->bindValue(":data_nascimento", "2018-05-16");
$stmt->bindValue(":turma", "I2D35A");

$stmt->execute();
?>