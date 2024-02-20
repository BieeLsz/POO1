<!DOCTYPE html>
<html>
<head>
    <title>Verificar Número Primo</title>
</head>
<body>
    <h2>Verificar se um número é primo</h2>
    <form method="post" action="">
        Número: <input type="number" name="num1">
        <input type="submit" value="Verificar">
    </form>

    <?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        if (is_numeric($num1)) {
            if (isPrime($num1)) {
                echo "$num1 é um número primo.";
            } else {
                echo "$num1 não é um número primo.";
            }
        } else {
            echo "Por favor, insira um valor numérico válido.";
        }
    }
    ?>
</body>
</html>