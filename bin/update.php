<?php

use Isw\Entity\Producto;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/doctrine.php';

$entityManager = getEntityManager();

$row = $entityManager->getRepository(Producto::class)->findOneBy([
    'nombre' => 'Producto 1',
]);

$row->setPrecio($row->getPrecio() + 0.67);

$entityManager->persist($row);
$entityManager->flush();

