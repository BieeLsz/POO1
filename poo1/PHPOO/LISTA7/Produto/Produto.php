<?php

    class Produto {
        private $codigo;
        private $nome;
        private $descricao;
        private $preco;
        private $categoria;
        private $quantidadeEstoque;
        
        public function __construct($codigo, $nome, $descricao, $preco, $categoria, $quantidadeEstoque) 
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->categoria = $categoria;
            $this->quantidadeEstoque = $quantidadeEstoque;
        }
        /*getters*/
        public function getCodigo(){
            return $this->codigo;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        
        public function getPreco(){
            return $this->preco;
        }
        
        public function getCategoria(){
            return $this->categoria;
        }
        
        public function getQuantidadeEstoque(){
            return $this->quantidadeEstoque;
        }
        /*fimGetters*/
        public function alterarEstoque($tipo, $valor){
            if($tipo == "entrada"){
                $this->quantidadeEstoque += $valor;
                return "Estoque atualizado: " . $this->quantidadeEstoque;
            } elseif($tipo == "saida"){
                if($this->quantidadeEstoque >= $valor){
                    $this->quantidadeEstoque -= $valor;
                    return "Estoque atualizado: " . $this->quantidadeEstoque;
                } else{
                    return "Quantidade insuficiente no estoque.";
                }
            } else {
                return "Tipo de movimentação inválido";
            }
        }
        public function reajustarPreco($percentual){
            $this->preco *= (1 + ($percentual / 100));
            return $this->preco;
        }
    }
    