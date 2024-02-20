<?php 

    $num1 = $_POST["num1"];

    if($num1 == 0){
        echo "Zero";
    } elseif($num1 > 0){
        echo "Número positivo";
    } else { 
        echo "Número negativo";
    }