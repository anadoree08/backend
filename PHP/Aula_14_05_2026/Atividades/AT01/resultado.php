<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
    }

    .container{
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        width: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        text-align: center;
    }

    h1{
        margin-bottom: 25px;
        color: #333;
        font-size: 28px;
    }

    p{
        font-size: 18px;
        margin: 15px 0;
        color: #444;
    }

    span{
        font-weight: bold;
        color: #7c3aed;
    }

    a{
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        background-color: #7c3aed;
        color: white;
        padding: 12px 20px;
        border-radius: 10px;
        transition: 0.3s;
    }

    a:hover{
        background-color: #5b21b6;
    }
</style>
</head>
<body>
    <?php 
    $_POST["numero"];
    $numero = $_POST["numero"];
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
    ?>
    <div class="container">
        <h1>Resultado</h1>
        <p>O número digitado foi: <span><?php echo $numero; ?></span></p>
        <p>O antecessor é: <span><?php echo $antecessor; ?></span></p>
        <p>O sucessor é: <span><?php echo $sucessor; ?></span></p>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>