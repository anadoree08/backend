<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        body{
            text-align: center;

        }
    </style>
</head>
<body>
    
    <table border="1" style="margin: 0 auto;">
        <tbody>

    
        <?php 
        $numero = 7;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>";
            echo "$numero x $i = " . $numero * $i . "<br></td></tr>";
        }
        ?>
        </tbody>    

    </table>
    
</body>
</html>

