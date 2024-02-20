<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Questão3</h2>
<!-- /* Questão 3: Construir um programa em PHP que leia um número inteiro não negativo e imprima na tela o seu fatorial
no seguinte formato (suponha que o número lido tenha sido 5): 5 x 4 x 3 x 2 x 1 = 120
 */-->
    <form action="" method="post">
    <label>Insira um número:</label><br>
    <input type="text" name="var1"><br><br>
    <input type="submit" value="Enviar">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["var1"];
        $fat = 1;
        if($num1<0){
            echo"<br>Insira um número positivo";
        } elseif($num1==0){
            echo"$num1! = 1";
        }else{
            echo"$num1! = ";
            for($i=$num1;$i>=1;$i--){
                $fat *= $i; 
                if($i>1) {
                    echo"$i x ";
                }else{
                    echo"1 = $fat";
                }
            }
        }
    } else{
        echo"<br>Sem Envio";
    }
    ?>
</body>
</html>