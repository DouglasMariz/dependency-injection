<?php //

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');

$container->compile();
#Cria café
$cafe = $container->get('Cafe');

#cria itens
$leite = $container->get('Leite');
$leite->setValor('leite-branco');
$acucar = $container->get('Acucar');
$acucar->setValor('acucar mascavo');

$itens = array($leite, $acucar);
$cafe->setAdicionais($itens);

$cafe->imprimeCafe();

#Cria café
$cafe2 = $container->get('Cafe');

#cria itens
$leite2 = $container->get('Leite');
$leite2->setValor('leite-desnatado');
$acucar2 = $container->get('Acucar');
$acucar2->setValor('acucar fino');

$itens2 = array($leite, $acucar);
$cafe2->setAdicionais($itens);

$cafe->imprimeCafe();
