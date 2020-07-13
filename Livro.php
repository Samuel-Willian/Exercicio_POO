<?php
class Livro{
    private $titulo;
    private $autor;
    private $edicao;
    private $ano;


    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo(){
        $this->titulo="O Exorcista";
    }


    public function getAutor(){
        return $this-> autor;
    }
    public function setAutor(){
        $this->autor="Willian Peter Blatty";
    }


    public function getAno(){
        return $this->ano;
    }
    public function setAno(){
        $this->ano=1971;
    }


    public function getEdicao(){
        return $this->edicao;
    }
    public function setedicao(){
        $this->edicao= 1;
    }

}
?>