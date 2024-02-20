<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

    <h2>Desconto no Salário</h2>
<!-- /* Questão 3: Construir um script em PHP que leia a quilometragem inicial e final de um veículo em uma viagem e a
quantidade de combustível consumido. Em seguida calcule, armazene e imprima a média de quilômetros por litro de
combustível e a média de combustível por quilômetro rodado.
 */-->
    <form action="" method="post">
    <label>Insira a quilometragem inicial:</label><br>
    <input type="text" name="var1"><br>
    <label>Insira a quilometragem final:</label><br>
    <input type="text" name="var2"><br>
    <label>Insira quantidade de combustível consumido:</label><br>
    <input type="text" name="var3"><br><br>
    <input type="submit" value="Enviar">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kminicial = $_POST["var1"];
        $kmfinal = $_POST["var2"];
        $combustivel = $_POST["var3"];

            $ 

        echo "<br>Seu salário bruto é R$$sbruto com um desconto de 8% de R$$desc fica com um salário líquido de R$$sliq";
    }
    ?>
</body>
</html>