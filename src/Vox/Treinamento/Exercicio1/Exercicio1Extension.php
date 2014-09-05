<?php

namespace Vox\Treinamento\Exercicio1;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class Exercicio1Extension implements ExtensionInterface
{

    public function getAlias()
    {
        return 'exercicio1_extesion';
    }

    public function getNamespace()
    {
        return 'http://www.voxtecnologia.com/exercicio1';
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container, new FileLocator(__DIR__ . '/Resources/config')
        );
        $loader->load('services.yml');
    }

}
