<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- /* 
                Questão 3: Faça um programa em PHP que solicite ao usuário a digitação de três números inteiros estritamente
            positivos. O programa deve determinar o tipo de triângulo com base em seus lados: equilátero, isósceles ou escaleno.
            Atenção: Parta do pressuposto que o os três valores formam um triângulo.
            • Equilátero: Três lados com a mesma medida.
            • Isósceles: Dois dos três lados tem a mesma medida.
            • Escaleno: Três lados com as medidas diferentes.

        */-->
    </head>
<body>

    <h2>Questão 3: Δ</h2>

    <form action="" method="post">
        <label>Digite o 1° número:</label><br>
        <input type="number" name="var1"><br>
        <label>Digite o 2° número:</label><br>
        <input type="number" name="var2"><br>
        <label>Digite o 3° número:</label><br>
        <input type="number" name="var3"><br><br>
        <input type="submit" value="Enviar">
    </form> 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $num1 = $_POST["var1"];
            $num2 = $_POST["var2"];
            $num3 = $_POST["var3"];

            if($num1 < 0 or $num2 < 0 or $num3 < 0){
                echo "<br>Todos os números precisam ser positivos!";
            } else{
                if($num1 > $num2 + $num3 or $num2 > $num1 + $num2 or $num3 > $num1 + $num2){
                    echo "<br>Os números inseridos não formam um triângulo";
                } else{
                    if($num1 == $num2 and $num2 == $num3){
                        echo"<br>Triângulo Equilátero: Três lados com a mesma medida.";
                    } elseif($num1 == $num2 or $num1 == $num3 or $num2 == $num3){
                        echo"<br>Triângulo Isósceles: Dois dos três lados tem a mesma medida.";
                    } else{
                        echo"<br>Triângulo Escaleno: Três lados com as medidas diferentes.";
                    }
                }
            }
        } else{
            echo "<br>Δ";
        }
    ?>
</body>
</html>