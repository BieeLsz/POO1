<?php
require "ContaBancaria.php";
// Criando um objeto ContaBancaria
$conta = new ContaBancaria("12345", 1000.00, "João", 123456789, "123456789", "joao@email.com");

// Exibindo informações da conta
echo "Número da Conta: " . $conta->getNumero() . "<br>";
echo "Saldo: " . $conta->getSaldo() . "<br>";
echo "Nome do Titular: " . $conta->getNomeTitular() . "<br>";
echo "CPF do Titular: " . $conta->getCpfTitular() . "<br>";
echo "Telefone do Titular: " . $conta->getTelefoneTitular() . "<br>";
echo "Email do Titular: " . $conta->getEmailTitular() . "<br>";

echo "<hr>";

// Testando depósito
$valorDeposito = 500.00;
echo "Depositando R$ $valorDeposito. Novo saldo: " . $conta->depositar($valorDeposito) . "<br>";

echo "<hr>";

// Testando saque
$valorSaque = 200.00;
echo "Sacando R$ $valorSaque. Novo saldo: " . $conta->sacar($valorSaque) . "<br>";

// Tentando sacar um valor maior que o saldo
$valorSaqueMaiorQueSaldo = 9000.00;
echo "Tentando sacar R$ $valorSaqueMaiorQueSaldo. <br>";
echo $conta->sacar($valorSaqueMaiorQueSaldo) . "<br>";
