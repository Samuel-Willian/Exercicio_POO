<?php
class Pessoa{ //nome de classe é sempre maiúsculo no início
    private $nome;
    private $idade;
    private $peso;
    private $sexo;


    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = "Samuel";
    }


    public function getIdade(){
        return $this->idade;
    }
    public function setIdade(){
        $this->idade = 16;
    }


    public function getPeso(){
        return $this->peso;
    }
    public function setPeso(){
        $this->peso=91;
    }


    public function getSexo(){
        return $this->sexo;
    }
    public function setsexo(){
        $this->sexo="masculino";
    }

}
?>