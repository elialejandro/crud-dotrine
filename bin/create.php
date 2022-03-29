<?php

use Isw\Entity\Producto;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/doctrine.php';

$entityManager = getEntityManager();

$producto1 = new Producto();
$producto1->setNombre("Producto 1")
    ->setPrecio('10.22');

$producto2 = new Producto();
$producto2->setNombre("Producto 2")
    ->setPrecio('8.56');

$entityManager->persist($producto1);
$entityManager->persist($producto2);

$entityManager->flush();
