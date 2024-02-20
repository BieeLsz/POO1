<?php

    class ContaBancaria{
        private $nomeTitular;
        private int $cpfTitular;
        private $telefoneTitular;
        private $emailTitular;
        private float $saldo;
        private $numero;
        
        public function __construct($numero, $saldo, $nomeTitular, $cpfTitular, $telefoneTitular, $emailTitular)
        {
            $this->numero = $numero;
            $this->saldo = $saldo;
            $this->nomeTitular = $nomeTitular;
            $this->cpfTitular = $cpfTitular;
            $this->telefoneTitular = $telefoneTitular;
            $this->emailTitular = $emailTitular;
        }
        
        public function depositar($valor){
            $this->saldo += $valor;
            return $this->saldo;
        }
        
        public function sacar($valor){
            if($this->saldo >= $valor){
                $this->saldo -= $valor;
                return $this->saldo;
            } else {
                return "Você não o saldo suficiente para o saque desejado. Saldo atual: " . $this->saldo;
            }
        }
        
            public function getNumero() {
                return $this->numero;
            }

            public function getSaldo() {
                return $this->saldo;
            }

            public function getNomeTitular() {
                return $this->nomeTitular;
            }

            public function getCpfTitular() {
                return $this->cpfTitular;
            }

            public function getTelefoneTitular() {
                return $this->telefoneTitular;
            }

            public function getEmailTitular() {
                return $this->emailTitular;
            }
    }