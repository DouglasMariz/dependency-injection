<?php

namespace Vox\Treinamento\DependencyInjection;

class TesteManager
{
    /**
     *
     * @var Teste
     */
    protected $teste;

    public function __construct(Teste $teste)
    {
        $this->teste = $teste;
    }

    public function getTeste()
    {
        return $this->teste;
    }

    public function setTeste(Teste $teste)
    {
        $this->teste = $teste;
    }

}
