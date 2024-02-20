<?php

    $ano = $_POST["num1"];

    if($ano % 4 == 0 and $ano % 100 !== 0){
        echo "Bisex";
    } else {
        echo "Não é bisex";
    }