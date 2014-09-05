<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cafe
 *
 * @author douglas

 *  */
namespace Vox\Treinamento\Exercicio1;

class Cafe {
    private $nome;
    private $adicionais;
    
    public function __construct() {
        $this->adicionais = array();
        $this->nome = "Café ";
    }
    
    public function getAdicionais() {
        return $this->adicionais;
    }

    public function setAdicionais($adicionais) {
        $this->adicionais = $adicionais;
    }
    
    public function addItens(ItensInterface $itens){
        $this->adicionais = $itens;
        return $this;
    }
    
    public function imprimeCafe(){
        $itens = array();
        $result = array();
        foreach ($this->adicionais as $key => $valor){
            $itens[] = $valor->getValor();
            $result[] = $this->nome . " com " . $itens[$key];
            echo $result[$key] . "<br>";
        }
    }
}
