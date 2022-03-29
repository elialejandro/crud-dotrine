<?php

declare(strict_types=1);

namespace Isw\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

use function PHPSTORM_META\map;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329055231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Tabla de Productos';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('productos');
        $table->addColumn('id', 'bigint', [
            'autoincrement' => true,
        ]);
        $table->addColumn('nombre', 'string', [
            'notnull' => true,
        ]);
        $table->addColumn('precio', 'decimal', [
            'precision' => 18,
            'scale'     => 4,
        ]);

        $table->addColumn('creado_en', 'datetime');
        $table->addColumn('actualizado_en', 'datetime');

        $table->setPrimaryKey(['id']);
        $table->addIndex(['nombre']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('productos');
    }
}
