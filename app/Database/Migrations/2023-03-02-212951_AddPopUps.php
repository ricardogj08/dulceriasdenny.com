<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de Pop Ups.
 */
class AddPopUps extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'bigint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'image' => [
                'type'       => 'varchar',
                'constraint' => 64,
                'unique'     => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'active' => [
                'type'       => 'tinyint',
                'constraint' => 1,
                'unsigned'   => true,
                'default'    => false,
            ],
            'finished_at' => [
                'type' => 'datetime',
                'null' => true,
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

        $this->forge->createTable('popups', true);
    }

    public function down()
    {
        $this->forge->dropTable('popups', true);
    }
}
