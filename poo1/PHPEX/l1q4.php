<?php

    $num1 = $_POST["num1"];

    if($num1 >= 100){
        $desc = $num1 * 0.10;
        $precodesc = $num1 - $desc;
        echo "Preço Inicial $num1<br>Desconto de $desc<br>Preço Final $precodesc";
    } else {
        $desc = $num1 * 0.05;
        $precodesc = $num1 - $desc;
        echo "Preço Inicial $num1<br>Desconto de $desc<br>Preço Final $precodesc";
    }