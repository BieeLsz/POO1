<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Desconto no Salário</h2>
<!-- /* Questão 2: Construir um script em PHP que leia o salário bruto de um funcionário e em seguida calcule, armazene e
imprima o salário bruto, um desconto de 8% e o salário líquido com base neste desconto.
Dica: O salário líquido é calculado somando os acréscimos e subtraindo os descontos do salário bruto.
 */-->
    <form action="" method="post">
    <label>Digite o seu salário bruto:</label><br>
    <input type="text" name="num1"><br><br>
    <input type="submit" value="Enviar">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sbruto = $_POST["num1"];

        $desc = $sbruto * 0.08;
        $sliq = $sbruto - $desc;

        
        echo "<br>Seu salário bruto é R$$sbruto com um desconto de 8% de R$$desc fica com um salário líquido de R$$sliq";
    }
    ?>
</body>
</html>