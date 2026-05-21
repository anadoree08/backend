<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador Mega Sena</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            padding: 20px;
        }

        .container{
            background-color: white;
            width: 450px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #1e3a8a;
            margin-bottom: 30px;
            font-size: 32px;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        label{
            margin-bottom: 8px;
            color: #475569;
            font-weight: bold;
        }

        input{
            padding: 12px;
            border: 2px solid #cbd5e1;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus{
            outline: none;
            border-color: #2563eb;
        }

        button{
            margin-top: 10px;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background-color: #2563eb;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background-color: #1d4ed8;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Sorteador Mega Sena</h1>
        <form action="resultado.php" method="POST">
            <button type="submit">Sortear Números</button>
        </form>
    </div>
</body>
</html>