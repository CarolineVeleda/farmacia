<?php

class Remedio{

    private $cod;
    private $nome;
    private $fabricante;
    private $controlado;
    private $quantidade;
    private $preco;


    function __construct($nome,$fabricante,$controlado,$quantidade,$preco){
        $this->nome =$nome;
        $this->fabricante = $fabricante;
        $this->controlado = $controlado;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getCod(){
        return $this->cod;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function getControlado(){
        return $this->controlado;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPreco(){
        return $this->preco;
    }


    public function setCod($cod){
        return $this->cod = $cod;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function setFabricante($f){
        return $this->fabricante = $f;
    }

    public function setControlado($c){
        return $this->controlado = $c;
    }

    public function setQuantidade($q){
        return $this->quantidade = $q;
    }

    public function setPreco($p){
        return $this->preco = $p;
    }



}


$remedio = new Remedio("xaropinho","fabricante","sim",10,5.00);
echo $remedio->getPreco();


?>