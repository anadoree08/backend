<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
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

    label{
        display: block;
        margin-bottom: 10px;
        color: #555;
        font-weight: bold;
        text-align: left;
    }

    input{
        width: 100%;
        padding: 12px;
        border: 2px solid #ccc;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 16px;
        transition: 0.3s;
    }

    input:focus{
        border-color: #7c3aed;
        outline: none;
    }

    button{
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background-color: #7c3aed;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover{
        background-color: #5b21b6;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Número Antecessor e Sucessor</h1>
        <form action="resultado.php" method="POST">
            <label>Digite um Número: </label>
            <input type="number" name="numero" required>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
</body>
</html>