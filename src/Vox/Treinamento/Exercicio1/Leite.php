<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Leite
 *
 * @author douglas

 *  */
namespace Vox\Treinamento\Exercicio1;

class Leite implements ItensInterface {
    
    private $valor;
    
    public function __construct() {
    }
    
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
}
