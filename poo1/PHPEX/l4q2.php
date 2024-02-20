<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Questão2</h2>
<!-- /* Questão 2: Construir um programa em PHP que leia um número inteiro não negativo e imprima na tela o seu fatorial.
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
        if($num1<=0){
            echo"<br>Insira um número positivo";
        } elseif($num1==0){
            echo"$num1! = 1";
        }else{
            for($i=1;$i<=$num1;$i++){
                $fat *= $i; 
            }
            echo"<br>$num1! = $fat";
        }
    } else{
        echo"<br>Sem Envio";
    }
    ?>
</body>
</html>