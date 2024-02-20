<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Questão1</h2>
<!-- /* Questão 1: Construir um programa em PHP que leia o número de vezes que se deseja imprimir a frase “Eu estou
aprendendo o loop FOR” e em seguida exiba a frase na tela a quantidade de vezes solicitada (uma frase por linha).
 */-->
    <form action="" method="post">
    <label>Insira a quantidade de vezes que deseja imprimir a frase:</label><br>
    <input type="text" name="var1"><br><br>
    <input type="submit" value="Enviar">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST["var1"];
        if($var1<=0){
            echo"<br>Insira um número positivo";
        }else{
            echo"<br>Quantidade de vezes pedidas: $var1";
            for($i=0;$i<=$var1;$i++){
                echo"<br>Eu estou aprendendo o loop FOR - $i";
            }
        }
    } else{
        echo"<br>Sem Envio";
    }
    ?>
</body>
</html>