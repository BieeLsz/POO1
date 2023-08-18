<?php

  $peso = $_POST["peso"];
  $altura = $_POST["altura"];
  

  if (empty($peso) || empty($altura)){
      echo "Valores faltando";
  } else {
      $imc = $peso / ($altura*$altura);
      $imc = number_format($imc, 2);
      echo "O seu IMC é: $imc <br>";
  }

  if ($imc<18.50){
      echo "Situação: Magreza";
  } elseif ($imc<24.90){
      echo "Situação: Normal";
  } elseif ($imc<=29.90){
      echo "Situação: Sobrepeso";
  } elseif ($imc<=39.90){
      echo "Situação: Obesidade";
  } else{
      echo "Situação: Obesidade Grave";
  }
 