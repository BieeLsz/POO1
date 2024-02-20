<?php

    require_once "LeilaoOnline.php";

    $novoLance = new LeilaoOnline("Teste", "TesteCurador", "940028922", 2.00, "aberto");

    // Exibindo informações do leilão
echo "Descrição do Leilão: " . $novoLance->getDescricao() . "<br>";
echo "Nome do Curador: " . $novoLance->getNomeCurador() . "<br>";
echo "Telefone de Contato: " . $novoLance->geTelContato() . "<br>";
echo "Data de Início: " . $novoLance->getDataInicio() . "<br>";
echo "Data de Fim: " . $novoLance->getDataFim() . "<br>";
echo "Lance Inicial: " . $novoLance->getLanceInicial() . "<br>";
echo "Situação do Leilão: " . $novoLance->getSituacao() . "<br>";

echo "<hr>";

// Testando darLance
$novoLanceValor = 5.00;
echo "Dando um lance de R$ $novoLanceValor. ";
echo $novoLance->darLance($novoLanceValor) . "<br>";

echo "<hr>";

// Testando encerrarLeilao
echo "Tentando encerrar o leilão. ";
echo $novoLance->encerrarLeilao() . "<br>";

// Tentando encerrar o leilão novamente
echo "Tentando encerrar o leilão novamente. ";
echo $novoLance->encerrarLeilao() . "<br>";

echo "<hr>";

    // Exibindo informações do leilão
    echo "Descrição do Leilão: " . $novoLance->getDescricao() . "<br>";
    echo "Nome do Curador: " . $novoLance->getNomeCurador() . "<br>";
    echo "Telefone de Contato: " . $novoLance->geTelContato() . "<br>";
    echo "Data de Início: " . $novoLance->getDataInicio() . "<br>";
    echo "Data de Fim: " . $novoLance->getDataFim() . "<br>";
    echo "Lance Inicial: " . $novoLance->getLanceInicial() . "<br>";
    echo "Situação do Leilão: " . $novoLance->getSituacao() . "<br>";