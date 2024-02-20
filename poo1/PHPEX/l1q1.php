<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $sinal = $_POST["sinal"];

    echo "O Cálculo é $num1 $sinal $num2.<br>";
    
    if($sinal == "+") {
        $result1 = $num1 + $num2;
        echo "O resultado é $result1.";
    } elseif($sinal == "-") {
        $result2 = $num1 - $num2;
        echo "O resultado é $result2. ";
    } elseif($sinal == "*") {
        $result3 = $num1 * $num2;
        echo "o resultado é $result3.";
    } elseif($sinal == "/") {
        if($num1 == 0 or $num2 == 0){
            echo "Nenhum número pode ser dividido por zero."
        } else{
        $result4 =  $num1 / $num2;
        echo "O resultado é $result4.";
    }
    } else{
        echo "Coloque os operadores do exemplo!";
    }
