<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de las redes sociales de la empresa.
 */
class AddSocialNetworks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'tinyint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'alias' => [
                'type'       => 'varchar',
                'constraint' => 32,
                'unique'     => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
            'link' => [
                'type'       => 'varchar',
                'constraint' => 2048,
                'null'       => true,
            ],
            'active' => [
                'type'       => 'tinyint',
                'constraint' => 1,
                'unsigned'   => true,
                'default'    => false,
            ],
            'icon' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('socialnetworks', true);
    }

    public function down()
    {
        $this->forge->dropTable('socialnetworks', true);
    }
}
