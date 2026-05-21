<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
        </tr>
    <?php
$funcionarios = [
	["nome" => "Ana", "cargo" => "Analista"],
	["nome" => "Carlos", "cargo" => "Desenvolvedor"],
	["nome" => "Mariana", "cargo" => "Gerente"]
];

foreach ($funcionarios as $f) {
	echo "<tr><td>" . $f["nome"] . "</td><td>" . $f["cargo"] . "</td></tr>";
}
?>
    </table>

</body>
</html>