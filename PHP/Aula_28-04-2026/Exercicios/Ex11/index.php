

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            border:2px solid black;
            padding:5px 5px;
        }
        section{
            border:2px solid red;
            padding:5px 5px;
        }
    </style>
</head>

<body>
    <main>
    <?php
    for ($i = 1; $i <= 5; $i++) {
    echo "Ano $i <= da empresa <br>";
    }
    ?>
    </main>

    <section>

    <?php
    for ($i = 1; $i <= $anos; $i++) {
        echo "Ano $i <= de operação <br>";
    }
    ?>
    </section>

</body>
</html>