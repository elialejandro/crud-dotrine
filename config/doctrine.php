<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @return EntityManager
 */
function getEntityManager()
{
    $paths = [
        __DIR__ . '/../src/Entity',
    ];

    $isDevMode = true;

    $dbParams = [
        'driver' => 'pdo_mysql',
        'user'   => 'root',
        'password' => '',
        'dbname'   => 'crud',
    ];

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $entityManager = EntityManager::create($dbParams, $config);

    return $entityManager;
}


