<?php
class Carro{
    private $placa;
    private $cor;
    private $modelo;
    private $fabricante;

    public function getPlaca(){
        return $this->placa;
    }
    public function setPlaca(){ //o set está incorreto. Deve receber a informação como parâmetro.
                                //Se ficar assim só vai existir a placa da PQP em todos os carros criados.
        $this->placa="PQP-2020";
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor(){
        $this->cor="Preto";
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo(){
        $this->modelo="Fusca";
    }

    public function getFabricante(){

        return $this->fabricante;
    }
    public function setFabricante(){
        $this->fabricante = "Volksvagen.";
    }
}
?>