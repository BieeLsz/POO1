<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Questão1</h2>
    <!--Questão 1: Construir um programa em PHP que leia um número inteiro e imprima na tela a tabuada de multiplicação
deste um número. A saída deve ser formatada como mostrada abaixo (suponha que o número lido tenha sido 5):
                                                                                                            1 x 5 = 5
                                                                                                            2 x 5 = 10
                                                                                                            3 x 5 = 15
                                                                                                            ...
                                                                                                            9 x 5 = 45
                                                                                                            10 x 5 = 50 -->
    <form action="" method="post">
        <label>Insira um número para fazer a tabuada dele:</label><br>
        <input type="text" name="num1"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];

        if ($num1 <= 0) {
            echo "<br>Por favor, insira um número inteiro positivo válido.";
        } else {
            $i = 1;
            while ($i <= 10) {
                $result = $i * $num1;
                echo "<br>$num1 x $i = $result";
                $i++;
            }
        }
    } else {
        echo "<br>Sem Envio";
    }
    ?>
</body>
</html>
