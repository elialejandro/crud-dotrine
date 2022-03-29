<?php 

use Isw\Entity\Producto;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/doctrine.php';

$entityManager = getEntityManager();

$rowset = $entityManager->getRepository(Producto::class)->findAll();

foreach ($rowset as $row) {
    echo "--------------\n";

    echo "Producto: " . $row->getNombre() . "\n";
    echo "Precio: " . $row->getPrecio() . "\n";
    
}

echo "--------------\n";
