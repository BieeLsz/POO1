<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Média Aritmética</h2>
<!-- /* Questão 1: Construir um script em PHP que leia 2 números inteiros e em seguida calcule, armazene e imprima a
média aritmética e a metade da diferença do primeiro pelo segundo. */-->
    <form action="" method="post">
    <label>Digite um número:</label><br>
    <input type="number" name="num1"><br>
    <label>Digite o segundo número:</label><br>
    <input type="number" name="num2"><br><br>
    <input type="submit" value="Enviar">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $media = ($num1 + $num2) / 2;
        $dif = abs($num1 - $num2) / 2;
        
        echo "<br>Média $media, Diferença $dif";
    }
    ?>
</body>
</html>