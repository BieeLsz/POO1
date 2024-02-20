<?php

    date_default_timezone_set('Brazil/East');

    class LeilaoOnline {
        private $descricao;
        private $nomeCurador;
        private $telContato;
        private $dataInicio;
        private $dataFim;
        private $lanceInicial;
        private $situacao;

            public function __construct($descricao, $nomeCurado, $telContato, $lanceInicial, $situacao)
            { 
                $this->descricao = $descricao;
                $this->nomeCurador = $nomeCurado;
                $this->telContato = $telContato;
                $this->dataInicio = date("d-m-y H:i:s");
                $this->dataFim = date("d-m-y H:i:s");
                $this->lanceInicial = $lanceInicial;
                $this->situacao = $situacao;
            }

            public function getDescricao()
            {
                return $this->descricao;
            }
            public function getNomeCurador()
            {
                return $this->nomeCurador;
            }
            public function geTelContato()
            {
                return $this->telContato;
            }
            public function getDataInicio()
            {
                return $this->dataInicio;
            }
            public function getDataFim()
            {
                return $this->dataFim;
            }
            private function formatarMoeda($valor)
            {
                return 'R$ ' . number_format($valor, 2, ',', '.');
            }
            public function getLanceInicial()
            {
                return $this->formatarMoeda($this->lanceInicial) . " " . $this->dataInicio;
            }            
            public function getSituacao()
            {
                if (strtolower($this->situacao) == "aberto") {
                    return $this->situacao . " " . $this->dataInicio;
                } elseif (strtolower($this->situacao) == "encerrado") {
                    return $this->situacao . " ". $this->dataFim;
                } else {
                    // leilaoProgramado
                    return $this->situacao;
                }
            }

            public function darLance($valor)
            {
                if($valor > $this->lanceInicial){
                    $this->lanceInicial = $valor;
                    return "Agora o lance é de " . $this->formatarMoeda($this->lanceInicial);
                } else {
                    return "Lance inválido, já existe um lance maior que o seu.";
                }
            }

            public function encerrarLeilao()
            {
                if(strtolower($this->situacao) == "aberto"){
                    $this->situacao = "encerrado";
                    return "O leilão foi encerrado.";
                } else {
                    return "O leilão não pode ser encerrado pois ainda não foi aberto ou já foi encerrado.";
                }
            }
        }
