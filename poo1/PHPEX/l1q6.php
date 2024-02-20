<?php
    
    $idade = $_POST["num1"];

    if ($idade<13){
        echo "Criança.";
    } elseif ($idade >= 13 and $idade <= 17){
        echo "Adolescente.";
    } elseif ($idade >= 18 and $idade <= 59){
        echo "Adulto.";
    } else {
        echo "Idoso.";
    }