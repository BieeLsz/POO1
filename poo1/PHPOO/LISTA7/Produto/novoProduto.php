<?php
    require_once "Produto.php";

    $novoProduto = new Produto("00001", "Controle", "Controle TV Samsung", 50.00, "Eletrônicos", 30);

    // Exibindo informações do produto
    
echo "Codigo do Produto: " . $novoProduto->getCodigo() . "<br>";
echo "Nome do Produto: " . $novoProduto->getNome() . "<br>";
echo "Descrição do Produto: " . $novoProduto->getDescricao() . "<br>";
echo "Preço do Produto: " . $novoProduto->getPreco() . "<br>";
echo "Categoria do Produto: " . $novoProduto->getCategoria() . "<br>";
echo "Quantidade do Produto no estoque : " . $novoProduto->getQuantidadeEstoque() . "<br>";

echo "<hr>";

    // Testando alteração de estoque
$tipoMovimentacao = "entrada"; // ou "saida"
$quantidadeMovimentacao = 10; // ajuste conforme necessário

echo "Realizando movimentação de estoque: $tipoMovimentacao de $quantidadeMovimentacao unidades.<br>";
echo $novoProduto->alterarEstoque($tipoMovimentacao, $quantidadeMovimentacao) . "<br>";

echo "<hr>";

    // Testando reajuste de preço
$percentualReajuste = 15; // ajuste conforme necessário

echo "Reajustando o preço em $percentualReajuste%. Novo preço: " . $novoProduto->reajustarPreco($percentualReajuste) . "<br>";
