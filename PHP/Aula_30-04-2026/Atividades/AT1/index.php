<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // cria uma tabela, pois eu acho que vai ficar mais bonito 
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
        </tr>
    <?php
    $funcionarios = [ // cria um array com o nome e a categoria de cada produto
	["nome" => "Algodão", "categoria" => "Higiene"],
	["nome" => "Refrigerante", "categoria" => "Bebidas"],
	["nome" => "Oreo", "categoria" => "Alimentos" ]
];

foreach ($funcionarios as $f) { // aqui o foreach pra passar pelo array e imprimir o nome
	echo "<tr><td>" . $f["nome"] . "</td><td>" . $f["categoria"] . "</td></tr>";
}
?>
 </table>
</body>
</html>
