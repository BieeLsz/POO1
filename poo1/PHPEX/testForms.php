<?php

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if (empty($peso) or empty($altura)){
        echo "Algum valor está incorreto";
    } else {
        $imc = $peso/($altura*$altura);
        echo "Seu IMC é de " . number_format($imc, 2, '.', '');
        echo "<hr>";
    }
    if ($imc < 18.5){
        echo "Baixo Peso";
    } elseif ($imc >= 18.5 and $imc < 25){
        echo "Normal";
    } elseif ($imc >= 25 and $imc < 30){
        echo "Sobrepeso";
    } else {
        echo "Obesidade";
    }
    