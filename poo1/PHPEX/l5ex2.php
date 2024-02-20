<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Questão2</h2>
    <!-- Questão 2: Construir um programa em PHP que leia um número inteiro positivo e mostre todos os seus divisores
(positivos) na tela.
 -->
    <form action="" method="post">
        <label>Insira um número para mostrar os seus divisores:</label><br>
        <input type="text" name="num1"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];

        if ($num1 <= 0) {
            echo "<br>Por favor, insira um número inteiro positivo válido.";
        } else {
            echo "Divisores de $num1:<br>";
            $i = 1;
            while ($i <= $num1) {
                if ($num1 % $i == 0) {
                    echo "$i é divisor de $num1<br>";
                }
            $i++;
            }
        }
    } else {
        echo "<br>Sem Envio";
    }
    ?>
</body>
</html>