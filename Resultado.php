<?php
    require_once 'Pessoa.php';
    require_once 'Carro.php';
    require_once 'Livro.php';

    $people = new Pessoa();
    $car = new Carro();
    $book = new Livro();

    //chamadas abaixo (set's) não fazem sentido em POO
    $people->setNome();
    $people->setIdade();
    $people->setPeso();
    $people->setSexo();

    $car->setFabricante();
    $car->setCor();
    $car->setPlaca();
    $car->setModelo();

    $book->setTitulo();
    $book->setAutor();
    $book->setAno();
    $book->setEdicao();

    //a exibição está perfeita. usando os métodos getters
    echo "Nome = ".$people->getNome()."<br/>";
    echo "Idade = ".$people->getIdade()."<br/>";
    echo "Peso = ".$people->getPeso()."<br/>";
    echo "Sexo = ".$people->getSexo()."<br/>";

    echo "Marca = ".$car->getFabricante()."<br/>";
    echo "Cor = ".$car->getCor()."<br/>";
    echo "Placa = ".$car->getPlaca()."<br/>";
    echo "Modelo = ".$car->getModelo()."<br/>";

    echo "Titulo = ".$book->getTitulo()."<br/>";
    echo "Autor = ".$book->getAutor()."<br/>";
    echo "Ano = ".$book->getAno()."<br/>";
    echo "Edição = ".$book->getEdicao()."<br/>";
?>