<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Questão4</h2>
    <!-- Questão 4: Construir um programa em PHP que leia um número inteiro e imprima na tela a tabuada de multiplicação deste um número. -->
    <form action="" method="post">
        <label>Insira um número inteiro:</label><br>
        <input type="text" name="var1"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["var1"];

        if (!is_numeric($num1)) {
            echo "<br>Por favor, insira um número válido.";
        } else {
            echo "Tabuada de multiplicação de $num1:<br>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $num1 * $i;
                echo "$i x $num1 = $resultado<br>";
            }
        }
    } else {
        echo "<br>Sem Envio";
    }
    ?>  
</body>
</html>
