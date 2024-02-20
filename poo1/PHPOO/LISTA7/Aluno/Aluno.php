<?php
    class Aluno{
        private $matriculaAluno;
        private $nomeAluno;
        private $emailAluno;
        private $telAluno;
        private $turnoAluno;

        //-------- GETTERS (retorna o valor dos atributos da classe/objeto) --------
        public function getMatricula(){
            return this->$matriculaAluno;
        }

        public function getNome(){
            return this->$nomeAluno;
        }

        public function getEmail(){
            return this->$emailAluno;
        }

        public function getTelefone(){
            return this->$telAluno;
        }

        public function getTurno(){
            return this->$turnoAluno;
        }
       
        //-------- SETTERS (alteram o valor dos atributos da classe/objeto) --------
        public function setMatricula($novaMatricula){
            $this->matriculaAluno = $novaMatricula;
        }

        public function setNome($novoNome){
            $this->nomeAluno = $novoNome;
        }

        public function setEmail($novoEmail){
            $this->emailAluno = $novoEmail;
        }

        public function setTelefone($novoTelefone){
            $this->telAluno = $novoTelefone;
        }

        public function setTurno($novoTurno){
            $this->turnoAluno = $novoTurno;
        }

    }
