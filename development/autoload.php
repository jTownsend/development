<?php

require __DIR__.'/../vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Funsational'                    => __DIR__.'/../src',
    'Sonata'                         => __DIR__.'/../src',
    'Knplabs'                        => __DIR__.'/../src',
    'FOS'                            => __DIR__.'/../src',
    'Symfony'                        => __DIR__.'/../vendor/symfony/src',
    'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-data-fixtures/lib',
    'Doctrine\\Common'               => __DIR__.'/../vendor/mongodb-odm/lib/vendor/doctrine-common/lib',
    'Doctrine\\MongoDB'              => __DIR__.'/../vendor/mongodb-odm/lib/vendor/doctrine-mongodb/lib',
    'Doctrine\\ODM\\MongoDB'         => __DIR__.'/../vendor/mongodb-odm/lib',
    'Doctrine\\DBAL'                 => __DIR__.'/../vendor/doctrine-dbal/lib',
    'Doctrine\\ORM'                  => __DIR__.'/../vendor/doctrine/lib',
    'Zend'                           => __DIR__.'/../vendor/zend/library',
));

$loader->registerPrefixes(array(
    'Twig_Extensions_' => __DIR__.'/../vendor/twig-extensions/lib',
    'Twig_'            => __DIR__.'/../vendor/twig/lib',
    'Swift_'           => __DIR__.'/../vendor/swiftmailer/lib/classes',
));
$loader->register();
