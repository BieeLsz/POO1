<?php
    $nota1 = $_POST["num1"];
    $nota2 = $_POST["num2"];
    $nota3 = $_POST["num3"];

    $media = ($nota1 + $nota2 + $nota3)/3;
    
    if($media>=7){
        echo "Aluno Aprovado.";
    } elseif($media<4){
        echo "Aluno Reprovado.";
    } else {
        echo "Aluno em Recuperação.";
    }